<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<?php



//echo $add->adduser();

?>  

<form action="adduser.php" method="post">
<?php ?>
<h1 class="text-center p-5"> Kullanıcı Girişi </h1>
  <div class="form-group py-5  ">
    <label for="exampleInputEmail1">Kullanıcı Adı</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı Adı giriniz">
    <small id="emailHelp" class="form-text text-muted">Bilgilerinizi kimse ile paylaşmayacağız.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Şifre</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifrenizi Giriniz">
  </div>
  <button type="submit" class="text-center btn btn-primary px-5">Giriş</button>
</form>
<h2><small id="emailHelp" class="text-center form-text text-muted">Giriş yaptıktan Sonra Ürünler Sayfasına Yönlendirileceksiniz</small></h2>
<?php



?>
</body>
</html>