<?php
namespace Product;

class AnimalFood extends Product {

    public $weight;
    public $foodType;
    public $packageType;


    public function __construct($details)
    {
        $this->weight = $details->weight; 
        $this->foodType = $details->foodType; 
        $this->packageType = $details->packageType; 
        parent::__construct($details);
    }


}