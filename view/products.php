<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    

</head>
<body class="bg-light">
<div class="col p-1 text-right ">
<a href="Basket.php"><button type="submit" class="btn btn-danger ml-1 text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="35" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></button></a>
</div>



<h1 class="text-center text-danger shadow p-3 bg-light font-weight-bold"><i class="bi bi-cart4">Ürünler</i></h3>


<?php
session_start();

?>
<div class="container">
 <div class="row">

<?php

foreach($products as $product){ 

    ?>
   
    <div class="col-sm-4 p-2 text-center mb-5 shadow bg-light"> 
    <div class="card" style="width:360px; height: 200px;">
    <div class="card-body">
    <form action="addbasket.php" method="post" >
    
        <h4 class="card-title"><?php echo $product->getName($product->getProductId());?></h4> 
        <hr />
        <p class="card-text"><?php echo $product->getPrice(). ' '. $product->getCurrency(); ?></p>
        <input name="id" type="hidden" id="" value="<?php echo $product->getProductId();?>" />
        <input name="name" type="hidden" id="" value="<?php echo $product->getName($product->getProductId());?>" />
        <input name="price" type="hidden" id="" value="<?php echo $product->getPrice($product->getProductId());?>" />
        <input name="count" type="hidden" id="" value="<?php echo $count = 1;?>" />
        <button class="ml-1 btn btn-danger" type="submit">Sepete Ekle</button> 
    </form>
    </div>
    </div>
    </div>
   <!--  </div> -->
<?php } ?> 


</div> 
</div>

    
</body>
</html>
