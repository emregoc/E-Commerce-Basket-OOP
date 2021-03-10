<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/style.css" />

<?php
session_start();

		include('delete.php'); 
        include('update.php');
        $totall = [];  
        $i = 0; 
        $total = 0;
        $totalcount = 0; 
        $app = new delete(); 
        $update = new update();
        $reqMethod = $_SERVER['REQUEST_METHOD'];
        if($reqMethod=='GET')
        {
            if (isset($_GET['action'])=='delete'){ 
                $app->unsett($_GET['deleteid']);  
                                                     
            }
            else if (isset($_GET['actionn'])=='update'){ 
                $update->update($_GET['updateid']);
            }
        }
		

?>


<div class="maindiv">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Sepetim </h5>
							</div>
							<div class="col-xs-6">
								<a href="productindex.php"<button type="submit" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Alışverişe Devam Et
								</button></a>
							</div>
						</div>
					</div>
				</div>
				<?php foreach($_SESSION['data'] as $data) 
           {    
               ?>
				
					<div class="row margin marginleft">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $data['product_name']; ?></strong></h4><h4><small><?php echo $data['product_currency']; ?></small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h5><strong><?php echo $data['product_price']; ?> <span class="text-muted">x</span></strong></h5>
							</div>
							<form action="Basket.php" method="GET">
							<div class="col-xs-4">
								<input type="text" name='updatedata' class="form-control input-sm" value="<?php echo $data['product_count']; ?>">
							</div>
							<?php
							 $totall[$i]=$data['product_price'] * $data['product_count'];//aynı üründen kactane varsa fiyatını hesaplıyoruz
							 ?>
							 <?php $totalcount = $totalcount + $data['product_count'];?>
							 <?php $total = $total + (float)$totall[$i];?>
                   			 <?php $i++; ?>
							<div class="margin col-xs-4">
							
							<input type="hidden" value='update' name='actionn'/>
                    		<input type="hidden" name='updateid' value="<?php echo $data['product_id']; ?>"/>
								<button type="submit" class="btn btn-default btn-sm btn-block">
									Ürün Miktarını Güncelle
								</button>
		   					</form>
							</div>	
							<div class="col-xs-2">
							<form action="Basket.php" method="GET"> 
                   			<input type="hidden" value="delete" name="action" /> 
                   		    <input name="deleteid" type="hidden" id="" value="<?php echo $data['product_id'];?>" />
								<button type="submit" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</form>
							</div>
                            
						</div>
					</div>
					<hr>
					<?php } ?>
					<!--<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>-->
					<!--<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
                            <div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>-->
				
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-8">
							<h4 class="text-right">Genel Toplam : <strong><?php echo($total); ?></strong></h4>
						</div>
						<div class="col-xs-2">
						<h4>Toplam Ürününüz :</h4> 
						</div>
                        <div class="col-xs-1">
						<button type="submit" class="inline btn btn-danger"><h4><?php echo($totalcount); ?></h4><svg xmlns="http://www.w3.org/2000/svg" width="50" height="35" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  						<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
						</svg></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
