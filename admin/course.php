<?php
$conn = mysqli_connect("localhost", "root", "", "seatingarrangement") or die("failed to connect");



if(isset($_POST['course_btn'])){

    echo $courseCode = $_POST['code'];
    echo $courseTitle = $_POST['title'];
    echo $dateTime = $_POST['datetime'];
    

    $sql = "INSERT INTO `course` (`courseCode`, `courseTitle`, `dayTime`) VALUES('$courseCode', '$courseTitle', '$dateTime')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php");
    }
}




?>