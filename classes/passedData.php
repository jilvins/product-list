<?php
require("productscontr.php");

class BaseProduct extends ProductsContr {
    function __construct($session, $post){
        $this->session = $session;
        $this->post = $post;
        
        $this->sku = trim($this->session['sku']);
        $this->name = trim($this->session['name']);
        $this->price = (float) $this->session['price'];
        $this->type = trim($this->session['type']);
    }
    public function deleteSelectedProducts() {
        $this->deleteProduct($this->post);

            header("Location:../index.php");
            exit();
   }
    
}

class Dvd extends BaseProduct {
    function __construct($session, $post){
        parent::__construct($session, $post);
        $this->size = (float) $this->session['size'];  
    }
    
    public function addNewDvd(){
    $this->createDvd($this->sku, $this->name, $this->price, $this->type, $this->size);
       
            header("Location:../index.php");
            exit();  
    }

}

class Book extends BaseProduct {
    function __construct($session, $post){
        parent::__construct($session, $post);
        $this->weight = (float) $this->session['weight'];   
    }

    public function addNewBook(){
        $this->createBook($this->sku, $this->name, $this->price, $this->type, $this->weight);
       
            header("Location:../index.php");
            exit();
    
    }
    
}

class Furniture extends BaseProduct {
    function __construct($session, $post){
        parent::__construct($session, $post);
        $this->height = (float) $this->session['height'];
        $this->width = (float) $this->session['width'];
        $this->length = (float) $this->session['length'];    
    }

    public function addNewFurniture(){
        $this->createFurniture($this->sku, $this->name, $this->price, $this->type, $this->height, $this->width,
        $this->length);
       
            header("Location:../index.php");
            exit();
    
    }
    
}