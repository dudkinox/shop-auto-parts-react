<?php
session_start();
require('http/client.php');
$_SESSION["error"] = false;
$NoUser = $_SESSION["no"] ?? "";
$EmailUser = $_SESSION["email"] ?? "";
$pages = isset($_GET["pages"]) ? $_GET["pages"] : '';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include 'components/Head.php'; ?>
</head>

<body onclick="InputValidation()">
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
        case 'Suspension':
            include 'pages/Suspension.php';
            break;
        case 'Brake':
            include 'pages/Brake.php';
            break;
        case 'Bumber_frame':
            include 'pages/Bumber_frame.php';
            break;
        case 'Headlights':
            include 'pages/Headlights.php';
            break;
        case 'Turbine':
            include 'pages/Turbine.php';
             break;
        case 'Exhaust':
            include 'pages/Exhaust.php';
             break;
        case 'Filter':
            include 'pages/Filter.php';
            break;
        case 'Side_mirror':
            include 'pages/Side_mirror.php';
            break;
        case 'Bumber_frame':
            include 'pages/Bumber_frame.php';
            break;
        case 'Ball_bearings':
            include 'pages/Ball_bearings.php';
            break;
        case 'Logout':
            session_destroy();
            echo '<script>window.location.href = "?pages=home";</script>';
            break;
        default:
            include 'pages/Homepage.php';
            break;
    }
    include 'components/Footer.php';
    ?>
</body>

</html>