<?php
require("classes/productscontr.php");
session_start();

class SessionSetter extends ProductsContr{
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $size;
    protected $height;
    protected $width;
    protected $length;
    protected $weight;

    function __construct(){
        
        $this->sku = trim($_SESSION['session-data']['sku']);
        $this->name = trim($_SESSION['session-data']['name']);
        $this->price = (float) $_SESSION['session-data']['price'];
        $this->type = trim($_SESSION['session-data']['type']);
        $this->size = (float) $_SESSION['session-data']['size'];
        $this->height = (float) $_SESSION['session-data']['height'];
        $this->width = (float) $_SESSION['session-data']['width'];
        $this->length = (float) $_SESSION['session-data']['length'];
        $this->weight = (float) $_SESSION['session-data']['weight']; }

        public function setName(){
            $this->name = $_SESSION['session-data']['name'];
        }
    
        public function getName(){
            return $this->name;
         }
         public function getPrice(){
            return $this->price;
         }
        public function addNewProduct(){
            
            $this->createProduct($this->sku, $this->name, $this->price, $this->type, $this->size, $this->height, $this->width,
            $this->length, $this->weight);
           
                header("Location:index.php");
                exit();
        
        }
        
        


}
$product = new SessionSetter();
$product->addNewProduct();
   

/*
if ($_SESSION['session-data']){
    
    $sku = trim($_SESSION['session-data']['sku']);
    $name = trim($_SESSION['session-data']['name']);
    $price = (float) $_SESSION['session-data']['price'];
    $type= trim($_SESSION['session-data']['type']);
    $size = (float) $_SESSION['session-data']['size'];
    $height = (float) $_SESSION['session-data']['height'];
    $width = (float) $_SESSION['session-data']['width'];
    $length = (float) $_SESSION['session-data']['length'];
    $weight = (float) $_SESSION['session-data']['weight'];
      
    try {
    
        $addProduct = new ProductsContr();
        $addProduct -> createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
        
        if($addProduct){
            header("Location:index.php");
            exit();
        } else {
            header("Location: add.php?status=add_error");
            exit();
        }
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
}else{
    header("Location: add.php?status=no_post");
    exit();
}
*/

