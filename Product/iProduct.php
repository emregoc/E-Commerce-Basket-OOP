<?php
namespace Product;

interface iProduct { 

    public function getPrice() : float;
    public function getCurrency() : string; 

    public function getCategory(int $productId) : string; 
    public static function getName(int $productId) : string; 
    public function productStatus(int $productId): string; 

}