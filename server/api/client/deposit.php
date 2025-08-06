<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    header('Content-Type: application/json');

    include("../../connection.php");

    function uploadFile($fieldName, $path, $name) {
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

    function generateRandomName($length = 100) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }


 
    if (isset($_POST['url'])) {

        $amount = $_POST['amount'];
        $crypto_name = $_POST['crypto_name'];
        $date = date('Y-m-d H:i:s');
        $wallet_address = $_POST['wallet_address'];
        $user = $_POST['user'];
        $url = $_POST['url'];
        $status = 'pending';


        if ($url == $domain . 'app/deposit/index.php' || $url == $domain . 'app/deposit/') {


            $profilePic = uploadFile('image', '../../../upload/deposit/', generateRandomName());
            $sql = "INSERT INTO deposit (amount, payment_type, `date`, `address` , `user` ,`img` , `status`) VALUES (?, ?, ?, ?,?,?,?)";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("sssssss", $amount, $crypto_name, $date, $wallet_address,$user, $profilePic,$status);

            if ($stmt->execute()) {

                echo json_encode([
                    'message' => 'Deposit request submitted successfully and awaiting review and approval.',
                    'status' => 'success'
                ]);

               

            } else {
                echo json_encode([
                    'message' => 'Error submitting deposit request: ' . $stmt->error,
                    'status' => 'error'
                ]);
            }

            $stmt->close();
            $connection->close();
            exit();

             
        } else {
            echo json_encode([
                'message' => 'Access Denied! You are not allowed to access this page directly.',
                'status' => 'error'
            ]);
            exit();
        }
    } else {
        echo json_encode([
            'message' => 'No data Summited!.',
            'status' => 'error'
        ]);
        exit();
    }
?>