<?php
require("../classes/passedData.php");
session_start();

$product = new Dvd($_SESSION['session-data'], null);
$product->addNewDvd();