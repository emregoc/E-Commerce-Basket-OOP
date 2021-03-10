<?php

class update{

 
    public function update($updateid){ 

        $task = $_GET['updatedata']; 
        $_SESSION['data'][$updateid]['product_count'] = $task; 
        header('location:Basket.php');
    }



}

?>