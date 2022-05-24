<?php
require("../../http/client.php");
$request = isset($_GET["request"]) ? $_GET["request"] : "";
$code = isset($_GET["code"]) ? $_GET["code"] : "";
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
    case "Edit_Product":
        $type = $_POST["typeProduct"];
        $nameProduct = $_POST["NameProduct"];
        $dataProduct = $_POST["DataProduct"];
        $price = $_POST["Price"];
        $quantity = $_POST["Quantity"];

        $queryUpdate = "";

        if ($_FILES["Images"]["name"] != "") {
            $fileImage = $_FILES["Images"]["name"];
            $fileImageTmp = $_FILES["Images"]["tmp_name"];
            $fileImageSize = $_FILES["Images"]["size"];
            $fileImageType = $_FILES["Images"]["type"];
            $fileImagePath = "../../assets/img/";
            if ($fileImageSize > 0) {
                $fileImageName = uniqid() . "." . pathinfo($fileImage, PATHINFO_EXTENSION);
                move_uploaded_file($fileImageTmp, $fileImagePath . $fileImageName);
                $queryUpdate = "UPDATE `product` 
                                SET `Type`='$type',
                                    `NameProduct`='$nameProduct',
                                    Imges='assets/img/" . $fileImageName . "',
                                    `DataProduct`='$dataProduct',
                                    `Price`='$price',
                                    `Quantity`='$quantity'
                                WHERE Code = '$code'";
            }
        } else {
            $queryUpdate = "UPDATE `product` 
                            SET `Type`='$type',
                                `NameProduct`='$nameProduct',
                                `DataProduct`='$dataProduct',
                                `Price`='$price',
                                `Quantity`='$quantity'
                            WHERE Code = '$code'";
        }
        if ($conn->query($queryUpdate) === TRUE) {
            header("Location: ../?pages=Product_List");
        } else {
            echo "Error: " . $queryUpdate . "<br>" . $conn->error;
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
