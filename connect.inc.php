<?php
$conn_error='could not connect';
$host='localhost';
$user='root';
$pass='';
$db='seatingarrangement';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($db))
die($conn_error);



?>