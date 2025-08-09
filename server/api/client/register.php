<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

include("../../connection.php");
include("../../mailer.php");
require('../../../PHPMailer/PHPMailer/PHPMailerAutoload.php');



function uploadFile($fieldName, $path, $name)
{
  if (!isset($_FILES[$fieldName]) || $_FILES[$fieldName]['error'] !== UPLOAD_ERR_OK) {
    return null; // file is optional
  }

  $file = $_FILES[$fieldName];
  $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
  $safeName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $name);
  $filename = $safeName . '_' . time() . '.' . $ext;
  $destination = rtrim($path, '/') . '/' . $filename;

  if (!is_dir($path)) {
    mkdir($path, 0755, true);
  }

  if (move_uploaded_file($file['tmp_name'], $destination)) {
    return $filename; // return filename only, store in DB
  }

  return null;
}


function generateRandom10DigitNumber()
{
  return mt_rand(1000000000, 9999999999);
}

// Example usage
$accountnumber = generateRandom10DigitNumber();


if (isset($_POST['url'])) {

  $url = $_POST['url'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $country = $_POST['country'];
  $email = $_POST['acct_email'];
  $pin = $_POST['acct_pin'];
  $password = $_POST['acct_password'];
  $confirmPassword = $_POST['confirmPassword'];
  $ssn = $_POST['ssn'];
  $confirmSsn = $_POST['confirm-ssn'];
  $dob = $_POST['dob'];
  $currency = $_POST['currency'];
  $account_type = $_POST['account-type'];
  $date = date('Y-m-d H:i:s');
  $status = 'active'; // Default status


  if ($url == $domain . 'auth/register.php') {

    if ($password === $confirmPassword && $ssn === $confirmSsn) {

      // Hash sensitive data
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $ssnHash = password_hash($ssn, PASSWORD_DEFAULT);

      // Set optional values or null
      $balance = '0';  // Default balance

      // Step 1: Check if email already exists
      $stmt = $connection->prepare("SELECT id FROM users WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->store_result();

      if ($stmt->num_rows > 0) {
        echo json_encode([
          'message' => 'This email is already registered. Please use another email!',
          'status' => 'error'
        ]);
        $stmt->close();
        exit();
      }
      $stmt->close();

      // Step 2: Upload file BEFORE inserting user
      $profilePic = uploadFile('profile', '../../../upload/profiles/', $email);

      // Step 3: Insert new user record
      $insert_stmt = $connection->prepare("
                    INSERT INTO users 
                    (email, `password`, pin, firstname, lastname, country, balance, ssn, profile,currency,status,account_number,birth,account_type,date_created) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?)
                ");

      if (!$insert_stmt) {
        echo json_encode([
          'message' => 'Failed to prepare insert statement.',
          'status' => 'error'
        ]);
        exit();
      }

      $insert_stmt->bind_param(
        "sssssssssssssss",
        $email,
        $passwordHash,
        $pin,
        $firstname,
        $lastname,
        $country,
        $balance,
        $ssn,
        $profilePic,
        $currency,
        $status,
        $accountnumber,
        $dob,
        $account_type,
        $date
      );

      if ($insert_stmt->execute()) {




        $message = '
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <title>Welcome Email</title>
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <style>
                        body {
                          margin: 0;
                          padding: 0;
                          background-color: #f4f4f4;
                          font-family: Arial, sans-serif;
                        }
                        .email-container {
                          max-width: 600px;
                          margin: 0 auto;
                          background-color: #ffffff;
                          padding: 30px 20px;
                          box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
                        }
                        .header {
                          background-color: #FFA73B;
                          padding: 40px 10px;
                          text-align: center;
                        }
                        .header h1 {
                          color: #ffffff;
                          margin: 0;
                          font-size: 28px;
                        }
                        .content {
                          padding: 20px;
                          text-align: left;
                          font-size: 16px;
                          color: #333333;
                        }
                        .content p {
                          margin: 15px 0;
                          line-height: 1.6;
                        }
                        .details {
                          background-color: #FFF4E5;
                          padding: 15px;
                          border-radius: 5px;
                          margin: 20px 0;
                          font-family: monospace, monospace;
                          font-size: 15px;
                          color: #333;
                        }
                        .footer {
                          background-color: #FFECD1;
                          text-align: center;
                          padding: 20px;
                          font-size: 14px;
                        }
                        .footer a {
                          color: #FFA73B;
                          text-decoration: none;
                        }
                      </style>
                    </head>
                    <body>
                      <div class="email-container">
                        <div class="header">
                    
                        </div>
                        <div class="content">
                          <p>Welcome! ' . htmlspecialchars($firstname . ' ' . $lastname). ', thank you so much for allowing us to help you with your recent account opening.</p>
                    
                          <div class="details">
                            <strong>Here are your details:</strong><br>
                            Full Name: ' . htmlspecialchars($firstname . ' ' . $lastname) . '<br>
                            Email: ' . htmlspecialchars($email) . '<br>
                            Password: ' . htmlspecialchars($password) . '<br>
                            PIN: ' . htmlspecialchars($pin) . '<br>
                            Account Number: ' . htmlspecialchars($accountnumber) . '
                          </div>
                    
                          <p>We are committed to providing our customers with the highest level of service and the most innovative banking products possible.</p>
                          <p>Respectfully,<br>
                          <strong>' . htmlspecialchars($sitename) . '</strong></p>
                        </div>
                        <div class="footer">
                          <h2>Need more help?</h2>
                          <p><a href="' . $domain . '/contact" target="_blank">We’re here to help you out</a></p>
                        </div>
                      </div>
                    </body>
                    </html>
                    ';



        $from = "contact@greenshieldfine.com";
        $from_name = "$sitename";
        $subject = 'Welcome to ' . $sitename;

        $result = smtpmailer($email, $from, $from_name, $subject, $message);

        if ($result) {

          echo json_encode(['message' => 'User registered successfully.', 'status' => 'success']);
        } else {

          echo json_encode(['message' => 'User registered successfully email not sent.', 'status' => 'success']);
        }
      } else {
        echo json_encode([
          'message' => 'Unable to register, please try again later.',
          'status' => 'error'
        ]);
      }

      $insert_stmt->close();
      $connection->close();
      exit();
    } else {
      echo json_encode([
        'message' => 'Password or SSN does not match',
        'status' => 'error'
      ]);
      exit();
    }
  } else {
    echo json_encode([
      'message' => 'Access Denied! You are not allowed to access this page directly.',
      'status' => 'error'
    ]);
    exit();
  }
} else {
  echo json_encode([
    'message' => 'No data posted.',
    'status' => 'error'
  ]);
  exit();
}
