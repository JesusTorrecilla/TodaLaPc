<?php
$servidor="localhost";
$base="transporte";
$user="phpmyadmin";
$pw="phpmyadmin";
try{
$conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
}
catch (PDOException $e){
  echo $e;
}
