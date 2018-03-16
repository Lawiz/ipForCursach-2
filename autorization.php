<?php 

require 'connect.php';

$login;
$password;

if(isset($_GET['login']))
{
    $login=$_GET['login'];
}
if(isset($_GET['password']))
{
    $password=$_GET['password'];
}

$query="SELECT user_password from users where user_login='$login'";
$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result==$password)
{
    echo succes;
}
else
{
    echo error;
}


?>