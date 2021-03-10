<?php

namespace Product;

final class CellPhone extends Product { 

    public $cpu; 
    public $screenSize;
    public $os;
    public $ram;

    public function __construct($details){  
        $this->cpu = $details->cpu.' 2500 Mhz';
        
                                                    
        $this->screenSize = $details->screenSize;
        $this->os = $details->os; 
        $this->ram = $details->ram; 

        parent::__construct($details); 

    }

}