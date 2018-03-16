<?php 

require 'connect.php';

$login;

if(isset($_GET['login']))
{
    $login=$_GET['login'];
}
if(isset($_GET['password']))
{
    $password=$_GET['password'];
}

$query="SELECT user_ip from users where user_login='$login'";
$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
$row=mysqli_fetch_assoc($result);
echo $row["user_ip"];


?>