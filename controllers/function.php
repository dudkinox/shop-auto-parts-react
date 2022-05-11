<?php

function checkSql($sql, $conn){
    if ($conn->query($sql) === TRUE) {
        header("Location: ../");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}