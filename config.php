<?php
error_reporting(0);
session_start();    

$ser="localhost";

$user="root";
$pass="";

$db="dessert_hub";

$con=new MySQLi($ser,$user,$pass,$db);


return $con;




?>