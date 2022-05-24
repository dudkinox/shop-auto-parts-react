
<?php 
session_start();
if($_SESSION['no'] == ""){
    header("Location: ../");
}
require("../http/client.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>

<head>
    <?php include 'components/Head.php'; ?>
</head>

<body class="">
    <div class="wrapper ">
        <?php
        include 'components/Sidebar.php';
        ?>
        <div class="main-panel">
            <?php
            $pages = isset($_GET["pages"]) ? $_GET["pages"] : '';
            switch ($pages) {
                case 'Add_Product':
                    include 'pages/Add_Product.php';
                    break;
                case 'Order':
                    include 'pages/Order.php';
                    break;
                case 'Product_List':
                    include 'pages/ProductList.php';
                    break;
                    case 'Edit_Product':
                        include 'pages/Edit_Product.php';
                        break;
                default:
                    include 'pages/homepage.php';
                    break;
            }
            ?>
        <?php 
        include 'components/Footer.php';
        ?>
        </div>
    </div>
    <?php include 'components/Script.php' ?>

</html>