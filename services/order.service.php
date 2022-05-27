<?php
session_start();
require('../http/client.php');

$request = isset($_GET["request"]) ? $_GET["request"] : "";
$sql = "";

switch ($request) {
    case "insert":
        $name = $_POST["name"];
        $lname = $_POST["lname"];
        $No = $_SESSION["no"];
        $total = $_POST["total"];
        $count = $_POST["count"];

        

        $imageSlip = $_FILES["imageSlip"]["name"];
        $imageSlip_tmp = $_FILES["imageSlip"]["tmp_name"];
        $imageSlip_size = $_FILES["imageSlip"]["size"];
        $imageSlip_type = $_FILES["imageSlip"]["type"];
        $imageSlip_error = $_FILES["imageSlip"]["error"];
        $imageSlip_ext = explode(".", $imageSlip);
        $imageSlip_ext = strtolower(end($imageSlip_ext));
        $allowed = array("jpg", "jpeg", "png");

        if (in_array($imageSlip_ext, $allowed)) {
            if ($imageSlip_error === 0) {
                if ($imageSlip_size <= 2097152) {
                    $imageSlip_new = uniqid("", true) . "." . $imageSlip_ext;
                    $imageSlip_destination = "../assets/Img/" . $imageSlip_new;
                    if (move_uploaded_file($imageSlip_tmp, $imageSlip_destination)) {
                        for ($i=0; $i < $count; $i++) { 
                            $sql = "INSERT INTO `oders`(`id_user`,`Name`, `Oder`, `ImgSlip`, `Status`, `Sum`, `Price`) 
                                    VALUES ('".$_SESSION["no"]."','" . $name . ' ' . $lname . "', '".$_POST["orderName".$i]."', 'assets/Img/".$imageSlip_new."', 'รอการอนุมัติ', '$total', '".$_POST["orderPrice".$i]."')";
                            if ($conn->query($sql) === TRUE) {
                                echo '
                                <script>
                                    sessionStorage.clear();
                                    window.location.href = "../";
                                </script>
                                ';
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                                exit;
                            }
                        }
                    } else {
                        echo "fail";
                        exit;
                    }
                } else {
                    echo "size";
                    exit;
                }
            } else {
                echo "error";
                exit;
            }
        } else {
            echo "type";
            exit;
        }
        break;
}
