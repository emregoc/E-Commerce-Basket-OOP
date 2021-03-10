<?php

class delete{

    public function unsett($deleteid) 
    {
        unset($_SESSION['data'][$deleteid]); 
        header('location:Basket.php');
    }
}