<?php

const USERNAME = "root";
const PASSWORD = "";
const DSN = "mysql:host=localhost;dbname=productlist";

try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Cennection successful";
} catch(Exception $e){
    echo "Error " . $e->getMessage();
    exit();
}