<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)


if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/online-banking/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "online_banking");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
} else {
    // Online (Live Server)
    $domain = "https://quanstofy.com/";

    define("USER", "vgsbo_vangardshieldfins");
    define("PASSWORD", "vanguar6_vanguardshieldsfin");
    define("DATABASE", "vanguar6_vanguardshieldsfin");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
}

// Site configurations
$sitename = "Vanguard Shield Bank";

// Email Config 
$siteemail = "support@vanguardshield.com";
$emailpassword  = "support@vgsbo.com";
$host = 'mail.vgsbo.com';
$sitephone  = "+44 776 0957 798";
$siteaddress  = " 221 W 34th St, New York, NY 10001";

session_start();

?>