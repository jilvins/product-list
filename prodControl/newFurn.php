<?php
require("../classes/passedData.php");
session_start();

$product = new Furniture($_SESSION['session-data'], null);
$product->addNewFurniture();