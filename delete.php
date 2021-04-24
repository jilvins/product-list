
<?php 
session_start();
//require("components/db.php");

if(isset($_POST['mass_delete'])){
    $all_id = $_POST["deleteid"];
    $extract_id = implode(',' , $all_id);
    echo $extract_id;
    }



?>