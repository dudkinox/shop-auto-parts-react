<?php
session_start();
require('http/client.php');
$_SESSION["error"] = false;
$pages = isset($_GET["pages"]) ? $_GET["pages"] : '';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include 'components/Head.php'; ?>
</head>

<body>
    <?php
    include 'components/PopUp.php';
    include 'components/Header.php';
    switch ($pages) {
        case 'Pay':
            include 'pages/Pay.php';
            break;
        case 'Register':
            include 'pages/Register.php';
            break;
        case 'Shop':
            include 'pages/Shop.php';
            break;
        default:
            include 'pages/Homepage.php';
            break;
    }
    include 'components/Footer.php';
    ?>
</body>

</html>