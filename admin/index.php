<!DOCTYPE html>
<html lang="en">

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
            include 'pages/homepage.php';
          
            ?>
        </div>
    </div>
    <?php include 'components/Script.php' ?>
</body>
<body onclick="InputValidation()">
    <?php
    switch ($pages) {
        case 'Add_Product':
            include 'pages/Add_product.php';
            break;      
        default:
            include 'pages/Homepage.php';
            break;
    }
   
    ?>
</body>

</html>