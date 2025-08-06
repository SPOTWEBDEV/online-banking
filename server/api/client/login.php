<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    header('Content-Type: application/json');
    require_once '../../connection.php'; 

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

       
        $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                echo json_encode(['status' => 'success', 'message' => 'Login successful']);

            } else {
                echo json_encode(['status' => 'error', 'message' => 'incorrect password']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No user found with this email']);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
    }


?>