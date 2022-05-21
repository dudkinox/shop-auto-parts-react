<?php
require("../../http/client.php");
$request = isset($_GET["request"]) ? $_GET["request"] : "";

switch ($request) {
    case "Add_Product":
        $fileImage = $_FILES["Imges"]["name"];
        $fileImageTmp = $_FILES["Imges"]["tmp_name"];
        $fileImageSize = $_FILES["Imges"]["size"];
        $fileImageType = $_FILES["Imges"]["type"];
        $fileImagePath = "../../assets/img/";
        if ($fileImageSize > 0) {
            $fileImageName = uniqid() . "." . pathinfo($fileImage, PATHINFO_EXTENSION);
            move_uploaded_file($fileImageTmp, $fileImagePath . $fileImageName);
            $Code = $_POST["Code"];
            $typeProduct = $_POST["typeProduct"];
            $NameProduct = $_POST["NameProduct"];
            $DataProduct = $_POST["DataProduct"];
            $Price = $_POST["Price"];
            $Quantity = $_POST["Quantity"];
            $query = "INSERT INTO `product`
                (
                 `Code`,
                 `Type`,
                 `NameProduct`,
                 `Imges`,
                 `DataProduct`,
                 `Price`,
                 `Quantity`) 
                VALUES 
                (
                '$Code',
                '$typeProduct',
                '$NameProduct',
                'assets/img/" . $fileImageName . "',
                '$DataProduct',
                '$Price',
                '$Quantity')";

            if ($conn->query($query) === TRUE) {
                echo "Add Product Success";
                header("Location: ../?pages=Product_List");
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
        break;
    case "delete":
        $code = isset($_GET["code"]) ? $_GET["code"] : '';
        $query = "DELETE FROM `product` WHERE `Code` = '$code'";
        if ($conn->query($query) === TRUE) {
            header("Location: ../?pages=Product_List");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        break;
}
