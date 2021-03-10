<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

spl_autoload_register(function ($className) {

    $exploded = explode('\\',$className); 
    $namespace = $exploded[0]; 

    if (count($exploded) === 1){ 
        $class = $exploded[0];  
       
    } else {                    
        $class = $exploded[1];
    }

    if ($namespace === 'App'){ 
        include $class.'.php'; 
    } elseif ($namespace === 'Product' ){ 
        include 'Product' . DIRECTORY_SEPARATOR .$class.'.php';
    } elseif ($namespace=== 'Payment' ){ 
        include 'Payment' . DIRECTORY_SEPARATOR . $class.'.php'; 
        
    } else {
        include $class . '.php'; 
    }
});


$conf = new Dbconfig();
$a = $conf->getDbConfig();
if($a === 'Dosya mevcut'){
    
}
else if($a === 'Lütfen Dosya oluşturun'){ 
    echo 'Db Dosyanızı oluşturun'; 
    return false; 
}

$app = new App\EcommerceApp();
$rawProducts = $app->product->getProductList();

$products = []; 


foreach($rawProducts as $product){
    $product = (object)$product; 
    switch($product->category){  
        case 'cellphone': 
            $products[] = new \Product\CellPhone($product); 
            break;                                          
        case 'animalFood': 
            if ($product->subCategory==='dog'){ 
                $products[] = new \Product\DogFood($product);
            } elseif ($product->subCategory==='cat'){ 
                $products[] = new \Product\CatFood($product); 
            }
            break;
    }
}


include('view/products.php');



?>
    
</body>
</html>