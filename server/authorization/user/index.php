<?php
$url = $domain . 'auth/index.php';

function formatNumber($number) {
    return number_format($number, 2, '.', ',');
}

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
    $id = $_SESSION['user_id'];
    $select = mysqli_query($connection, "SELECT * FROM `users` WHERE `id`=$id");
    if (mysqli_num_rows($select)) {
        while ($row = mysqli_fetch_assoc($select)) {
            $email = $row['email'];
            $username = $row['username'];
            $pin = $row['pin'];
            $first_name = $row['firstname'];
            $fullname = $row['firstname'] . ' ' . $row['lastname'];
            $img = $row['profile'];
            $account_type = $row['account_type'];
            $profile_pic = $domain . "upload/profiles/$img";
            $balance = $row['balance'] + $row['loan_balance'];
            $loan_balance = $row['loan_balance'];
            $currency_type = $row['currency'];
            $account_status = $row['status'];
            $account_limit = $row['account_limit'];
            $account_number = $row['account_number'];
            $date_created = $row['date_created'];
            $date_of_birth = $row['birth'];
            $address = $row['address'];
            $phone = $row['phone'];
            $occupation = $row['occupation'];
            $gender = $row['gender'];
            $ip_address = getClientIP();
            $billing_status = $row['billing_status'];
            $cot = $row['cot_code'];
            $imf = $row['imf_code'];
            $tax = $row['tax_code'];
            $kyc = $row['kyc'];
        }
    } else {
        echo "<script>window.open('$url', '_self');</script>";
    }
} else {
    echo "<script>window.open('$url', '_self');</script>";
}

function getClientIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

    if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
        session_destroy();
        echo "<script>window.open('$url', '_self');</script>";
    }
?>
