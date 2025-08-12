<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

include("../../connection.php");
include("../../mailer.php");
require('../../../PHPMailer/PHPMailer/PHPMailerAutoload.php');

function uploadFile($fieldName, $path, $name) {
    if (!isset($_FILES[$fieldName]) || $_FILES[$fieldName]['error'] !== UPLOAD_ERR_OK) {
        return null; // File is optional
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
        return $filename; // Return filename only, store in DB
    }

    return null;
}

function generateRandom10DigitNumber() {
    return mt_rand(1000000000, 9999999999);
}

// Extract and validate POST data
$url = $_POST['url'] ?? '';
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['acct_email'] ?? '';
$pin = $_POST['acct_pin'] ?? '';
$password = $_POST['acct_password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';
$dob = $_POST['dob'] ?? '';
$currency = $_POST['currency'] ?? '';
$account_type = $_POST['account-type'] ?? '';
$date = date('Y-m-d H:i:s');
$status = 'active';
$balance = '0';
$accountnumber = generateRandom10DigitNumber();

// Check if request came from the correct URL
if ($url == $domain . 'auth/register.php') {

    if ($password !== $confirmPassword) {
        echo json_encode([
            'message' => 'Passwords do not match.',
            'status' => 'error'
        ]);
        exit();
    }

    // Hash password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

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

    // Step 2: Upload profile picture
    $profilePic = uploadFile('profile', '../../../upload/profiles/', $email);

    // Step 3: Insert new user
    $insert_stmt = $connection->prepare("
        INSERT INTO users 
        (email, password, pin, firstname, lastname, balance, profile, currency, status, account_number, birth, account_type, date_created) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if (!$insert_stmt) {
        echo json_encode([
            'message' => 'Failed to prepare insert statement.',
            'status' => 'error'
        ]);
        exit();
    }

    $insert_stmt->bind_param(
        "sssssssssssss",
        $email,
        $passwordHash,
        $pin,
        $firstname,
        $lastname,
        $balance,
        $profilePic,
        $currency,
        $status,
        $accountnumber,
        $dob,
        $account_type,
        $date
    );

    if ($insert_stmt->execute()) {
        // Build welcome email
        $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <title>Welcome Email</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
          <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto;">
            <h2>Welcome to ' . htmlspecialchars($sitename) . '</h2>
            <p>Hello ' . htmlspecialchars($firstname . ' ' . $lastname) . ',</p>
            <p>Thank you for registering with us. Your account has been created successfully.</p>
            <p><strong>Account Number:</strong> ' . htmlspecialchars($accountnumber) . '</p>
            <p>If you have any questions, feel free to contact us.</p>
            <p>— The ' . htmlspecialchars($sitename) . ' Team</p>
          </div>
        </body>
        </html>
        ';

        $from = "support@psnab.com";
        $from_name = $sitename;
        $subject = 'Welcome to ' . $sitename;

        $emailSent = smtpmailer($email, $from, $from_name, $subject, $message);

        echo json_encode([
            'message' => $emailSent
                ? 'User registered successfully.'
                : 'User registered successfully, email not sent.',
            'status' => 'success'
        ]);
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
        'message' => 'Access Denied! You are not allowed to access this page directly.',
        'status' => 'error'
    ]);
    exit();
}
