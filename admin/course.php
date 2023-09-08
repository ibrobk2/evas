<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>
<body>
    

<?php
$conn = mysqli_connect("localhost", "root", "", "seatingarrangement") or die("failed to connect");



if(isset($_POST['course_btn'])){

     $courseCode = $_POST['code'];
     $courseTitle = $_POST['title'];
     $dateTime = $_POST['datetime'];
    

    $sql = "INSERT INTO `course` (`courseCode`, `courseTitle`, `dayTime`) VALUES('$courseCode', '$courseTitle', '$dateTime')";
    $result = mysqli_query($conn, $sql);

    if($result){ ?>
        <script>
        Swal.fire(
          'Good job!',
          '<?= $courseCode; ?> Course Registered Successful!',
          'success'
        ).then((result)=>{if(true){window.location = "index.php"}});
        
        </script>
  <?php  }
}




?>
</body>
</html>