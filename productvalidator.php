<?php
session_start();

class ProductValidator{
    public $data;
    public $errors = [];
    public static $fields = ['sku', 'name', 'price', 'type', 'size', 'height', 'width', 'length', 'weight' ];
    
    public function __construct($post_data)
    {$this->data = $post_data;    
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSku();
        $this->validateName();
        $this->validatePrice();
        $this->validateType();
        $this->validateSize();
        return $this->errors;
    }
    public function validateSku(){
        $val = trim($this->data['sku']);
        if(empty($val)){
            $this->addError('sku', 'sku field cannot be empty');
        } else {
            if(!preg_match('/(DVD|BOK|FRN)\d{6,6}$/', $val)){
                $this->addError('sku','sku must start with DVD - for DVD type of item, 
                BOK-for book type of item, FRN for furniture type of item, following by 6 digets');
        }}}
    public function validateName(){
        $val = trim($this->data['name']);
    if(empty($val)){
      $this->addError('name', 'product name cannot be empty');
    } else {
      if(!preg_match('/^[a-zA-Z0-9 _]{3,40}$/', $val)){
        $this->addError('name','name must be 3-40 chars containing letters and digits');
      }}}
    public function validatePrice(){
        $val = trim($this->data['price']);
    if(empty($val)){
      $this->addError('price', 'product price cannot be empty');
    } else {
      if(!preg_match('/^\d+\.?,?\d*$/', $val)){
        $this->addError('price','price must contain only digits and integers');
      }}}
    public function validateType() {
        $val = trim($this->data['type']);
    if(empty($val)){
      $this->addError('type', 'product type must be selected');
    } else {
      if(!preg_match('/(DVD|book|furniture)$/', $val)){
        $this->addError('type','product type must be selected');
      }}}
public function validateSize() {
    $val = trim($this->data['size']);
if(empty($val)){
  $this->addError('size', 'DVD size cannot be empty');
} else {
  if(!preg_match('/^\d+\.?,?\d*$/', $val)){
    $this->addError('size','DVD size must contain only digits or integers');
  }}}
  public function validateHeight() {
    $val = trim($this->data['height']);
if(empty($val)){
  $this->addError('height', 'Furniture height cannot be empty');
} else {
  if(!preg_match('/^\d+\.?,?\d*$/', $val)){
    $this->addError('size','Furniture height must contain only digits or integers');
  }}}
  public function validateWidth() {
    $val = trim($this->data['width']);
if(empty($val)){
  $this->addError('width', 'Furniture width cannot be empty');
} else {
  if(!preg_match('/^\d+\.?,?\d*$/', $val)){
    $this->addError('width','Furniture width must contain only digits or integers');
  }}}
  public function validateLength() {
    $val = trim($this->data['length']);
if(empty($val)){
  $this->addError('length', 'Furniture length cannot be empty');
} else {
  if(!preg_match('/^\d+\.?,?\d*$/', $val)){
    $this->addError('length','Furniture length must contain only only digits or integers');
  }}}
  public function validateWeight() {
    $val = trim($this->data['weight']);
if(empty($val)){
  $this->addError('weight', 'Book weight cannot be empty');
} else {
  if(!preg_match('/^\d+\.?,?\d*$/', $val)){
    $this->addError('weight','Book weight must contain only digits or integers');
  }}}
    
    public function addError($key, $val){
        $this->errors[$key] = $val;
    }
}

class DVDValidator extends ProductValidator{
   
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSku();
        $this->validateName();
        $this->validatePrice();
        $this->validateType();
        $this->validateSize();
        
        if($this->errors !== []){
            return $this->errors; 
        }else {
            $_SESSION['session-data'] = $this->data;
        header ("Location: ./newproduct.php"); exit;}
    }
}

class BookValidator extends ProductValidator{
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSku();
        $this->validateName();
        $this->validatePrice();
        $this->validateType();
        $this->validateWeight();

        if($this->errors !== []){
            return $this->errors; 
        }else {
            $_SESSION['session-data'] = $this->data;
        header ("Location: ./newproduct.php"); exit;}
    }
}
class FurnitureValidator extends ProductValidator{
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSku();
        $this->validateName();
        $this->validatePrice();
        $this->validateType();
        $this->validateHeight();
        $this->validateWidth();
        $this->validateLength();

        if($this->errors !== []){
            return $this->errors; 
        }else {
            $_SESSION['session-data'] = $this->data;
        header ("Location: ./newproduct.php"); exit;}
    }
}
class NoneValidator extends ProductValidator{
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateSku();
        $this->validateName();
        $this->validatePrice();
        $this->validateType();
        return $this->errors;
    } 
}

?>