<?php
$url = $domain . 'auth/index.php';

function formatNumber($number)
{
    return number_format($number, 2, '.', ',');
}


function sanitize($value, $default = 'None') {
    return empty(trim($value)) ? $default : $value;
}



if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
    $id = $_SESSION['user_id'];
    $select = mysqli_query($connection, "SELECT * FROM `users` WHERE `id`=$id");
    if (mysqli_num_rows($select)) {
        while ($row = mysqli_fetch_assoc($select)) {
            $email            = sanitize($row['email']);
            $username         = sanitize($row['username']);
            $pin              = sanitize($row['pin']);
            $first_name       = sanitize($row['firstname']);
            $fullname         = sanitize($row['firstname']) . ' ' . sanitize($row['lastname']);
            $img              = sanitize($row['profile'], 'default.png');
            $profile_pic      = $domain . "upload/profiles/$img";
            $account_type     = sanitize($row['account_type']);
            $balance          = sanitize($row['balance'], 0) + sanitize($row['loan_balance'], 0);
            $loan_balance     = sanitize($row['loan_balance'], 0);
            $currency_type    = sanitize($row['currency']);
            $account_status   = sanitize($row['status']);
            $account_limit    = sanitize($row['account_limit'], 0);
            $account_number   = sanitize($row['account_number']);
            $date_created     = sanitize($row['date_created']);
            $date_of_birth    = sanitize($row['birth']);
            $address          = sanitize($row['address']);
            $phone            = sanitize($row['phone']);
            $occupation       = sanitize($row['occupation']);
            $gender           = sanitize($row['gender']);
            $ip_address       = getClientIP(); // assuming this is already clean
            $billing_status   = sanitize($row['billing_status']);
            $cot              = sanitize($row['cot_code']);
            $imf              = sanitize($row['imf_code']);
            $tax              = sanitize($row['tax_code']);
            $kyc              = sanitize($row['kyc']);
            $step_verification = sanitize($row['2_step_verification']);
            $status           = sanitize($row['status']);
            $status_message   = sanitize($row['status_message']);
            $country   = sanitize($row['country']);
        }
    } else {
        echo "<script>window.open('$url', '_self');</script>";
    }
} else {
    echo "<script>window.open('$url', '_self');</script>";
}

function getClientIP()
{
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















if ($status === 'suspended' && !empty($status_message)) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Account Suspended',
                html: `" . addslashes($status_message) . "`,
                confirmButtonText: 'OK',
                allowOutsideClick: false,
                allowEscapeKey: false
            });
        });
    </script>";
}
