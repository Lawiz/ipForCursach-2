<?php
require 'connect.php';

$login;
$password;
$ip_adress; 

if(isset($_GET['login']))
{
    $login=$_GET['login'];
}
if(isset($_GET['password']))
{
    $password=$_GET['password'];
}
if(isset($_GET['ip_adress']))
{
    $ip_adress=$_GET['ip_adress'];
}

$query="INSERT INTO users VALUES ('$login','$password','$ip_adress')";
$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "success";
}

?>