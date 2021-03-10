<?php
namespace App; 


use Product\Product; 

final class EcommerceApp {

    public $name;
    public $version;

    public $product;
    public $database;

    public function __construct(){
        $this->product = new Product(null);                                       
    }

}