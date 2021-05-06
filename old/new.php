<?php
$DSN = 'mysql:host=localhost;dbname=productlist';
$ConnectingDB = new PDO($DSN, 'root', '');
$sql = "SELECT * FROM products  WHERE type='book'";
$result = $ConnectingDB->query($sql);

class Product {
    public $id;
    public $sku;
    public $name;
    public $price;
    public $type;

    function __construct($id,$sku,$name,$price, $type) {
		$this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
   }

   function callProduct(){
       return "$this->sku and $this->name and $this->price and $this->type";
   }
}

class DvdProduct extends Product {
    public $size;
    
    public function __construct($id,$sku,$name,$price, $type, $size){
        parent::__construct($id,$sku,$name,$price, $type);
        $this->size = $size; 
      }
      function callProduct(){
        return "$this->sku and $this->name and $this->price and $this->type and $this->size";
    }
}
class BookProduct extends Product {
    public $weight;

    public function __construct($id,$sku,$name,$price, $type, $weight){
        parent::__construct($id,$sku,$name,$price, $type);
        $this->weight = $weight; 
      }
      function callProduct(){
        return "$this->sku and $this->name and $this->price and $this->type and $this->weight";
    }
}
class FurnitureProduct extends Product {
    public $height;
    public $width;
    public $length;

    public function __construct($id,$sku,$name,$price, $type, $height, $width, $length){
        parent::__construct($id,$sku,$name,$price, $type);
        $this->height = $height; 
        $this->width = $width; 
        $this->length = $length; 
      }
      function callProduct(){
        return "$this->sku and $this->name and $this->price and $this->type and $this->height and $this->width and $this->length";
    }
}

var_dump($result['name'])

?>