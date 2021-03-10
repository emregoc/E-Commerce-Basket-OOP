<?php

use User\User;

include('User/User.php');

$app = new User();

$rawUser = $app->getUser();

$usersid = [];

$usernametext = $_POST['username'];

$passwordtext = $_POST['password'];
$username = [];
$password = [];
$i = 0;
foreach($rawUser as $user){
  $user = (object)$user; 
  $usersid[$i] = $user->id;
  var_dump($usersid[$i]);
  $username[$i] = $app->getUsername($usersid[$i]);
  $password[$i] = $app->getPassword($usersid[$i]);
    if($username[$i] == $usernametext && $password[$i] == $passwordtext)
    {
       
      header('location:productindex.php');
    }
    else{
        
        header('location:404.php');
    }
    $i++;
}
?>