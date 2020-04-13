
<?php

$host_name = "localhost" ;
$name= "root";
$pass="";
$db = "webproject";

$con = mysqli_connect($host_name,$name,$pass) or die('error!');
mysqli_select_db($con,$db);


?>
