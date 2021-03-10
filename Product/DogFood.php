<?php
namespace Product;

final class DogFood extends AnimalFood { 
    private $race; 

    public function __construct($details){
        $this->race = $details->raceType; 
        parent::__construct($details);
    } 

}