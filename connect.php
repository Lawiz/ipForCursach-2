<?php
require_once 'constants.php';
$error_connection=0;
$link = mysqli_connect($host, $user, $password, $database);
if(is_null($link))
    return json_encode('status:$error_connection');
 



?>