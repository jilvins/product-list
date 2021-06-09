<?php
require("../classes/passedData.php");
session_start();

$product = new Book($_SESSION['session-data'], null);
$product->addNewBook();