<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['inv'];
    $venue = $_POST['venue'];
    $time = $_POST['time'];


    $sql = "INSERT INTO faculty VALUES ('$name', '$venue', '$time')";
    $res = $conn->query($sql);

    if($res){
        header("Location: index.php");
    }else{
        exit();
    }
}




?>