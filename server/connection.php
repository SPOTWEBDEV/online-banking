<?php
    session_start();
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "online_banking");

    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);



    if (!$connection) {
        die('not conneted to databse');
    }

    $sitename = "green shield finance.";
    $domain = "https://greenshieldfine.com/";
    $siteaddress = "2130 Chili Ave, Rochester, NY 14624";
    $supportemail = "contact@greenshieldfine.com";    
    $supportphone = "13183509278";





?>