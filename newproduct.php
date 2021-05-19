<?php
require("classes/passedData.php");
session_start();

$product = new PassedData($_SESSION['session-data'], null);
$product->addNewProduct();
   


