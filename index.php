<?php
$pages = isset($_GET["pages"]) ? $_GET["pages"] : '';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include 'components/Head.php'; ?>
</head>

<body>
    <?php
    include 'components/Header.php';
    switch ($pages) {
        case 'pay':
            include 'pages/Pay.php';
            break;
        default:
            include 'pages/Homepage.php';
            break;
    }
    include 'components/Footer.php';
    ?>
</body>

</html>