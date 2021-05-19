<?php
require("productscontr.php");

class PassedData extends ProductsContr{
   
   function __construct($session, $post){
       $this->session = $session;
       $this->post = $post;
       
       $this->sku = trim($this->session['sku']);
       $this->name = trim($this->session['name']);
       $this->price = (float) $this->session['price'];
       $this->type = trim($this->session['type']);
       $this->size = (float) $this->session['size'];
       $this->height = (float) $this->session['height'];
       $this->width = (float) $this->session['width'];
       $this->length = (float) $this->session['length'];
       $this->weight = (float) $this->session['weight']; 
    }

       public function addNewProduct(){
           $this->createProduct($this->sku, $this->name, $this->price, $this->type, $this->size, $this->height, $this->width,
           $this->length, $this->weight);
          
               header("Location:index.php");
               exit();
       
       }
       public function deleteSelectedProducts() {
            $this->deleteProduct($this->post);

                header("Location:index.php");
                exit();
       }
       
}