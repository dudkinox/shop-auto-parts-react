<?php
session_start();
require('../http/client.php');
require('../controllers/function.php');

$request = isset($_GET["request"]) ? $_GET["request"] : "";
$sql = "";

switch ($request) {
    case "register":
        $email = $_POST["email-register"];
        $password = md5($_POST["password-register"]);
        $address = $_POST["address"];
        $zipCode = $_POST["zip-code"];
        $phone = $_POST["phone"];

        $sql = "INSERT INTO account
                (`No`, `Password`, `Type`, Email, `Address`, Phone) 
                VALUES 
                ('','$password','user','$email','" . $address . " " . $zipCode . "','$phone')";
        checkSql($sql, $conn);
        break;
    case "login":
        $hashPassword = md5($_POST["password-login"]);
        $sql = "SELECT `Type`, `No`, `Email` FROM account 
                WHERE Email = '" . $_POST["email-login"] . "' AND Password = '" . $hashPassword . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["Type"] == "admin") {
                $_SESSION["admin"] = true;
                $_SESSION["no"] = $row["No"];
                header("Location: ../admin");
            } else {
                $_SESSION["user"] = true;
                $_SESSION["no"] = $row["No"];
                $_SESSION["email"] = $row["Email"];
                header("Location: ../");
            }
        } else {
            $_SESSION["pop-up"] = "Email or Password is incorrect";
            $_SESSION["error"] = true;
            header("Location: ../");
        }
        break;
}
