<?php
include "connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
<style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
      margin-top: 0;
    }
    
    .form-container {
      background-color: #f4f4f4;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4caf50;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .button:hover {
      background-color: #45a049;
    }
    
    .table-container {
      overflow-x: auto;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .btn-primary, #hall_btn, #print{
      padding: 10px;
      border: none;
      outline: none;
      color: white;
      background-color: dodgerblue;
      border-radius: 6px;
    }

    .btn-primary:hover{
      cursor: pointer;
      opacity: 0.85;
    }

    .header{
        text-align: center;
        font-family: sans-serif;
    }

/* #print{
    text-align: right;
} */

.course_details{
    display: flex;
}

th, td{
  border: 2px solid #eee;
}
   
    
    @media screen and (max-width: 600px) {
      table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }
      
      th, td {
        display: inline-block;
        width: auto;
      }
    }
  </style>
</head>
<body>
    <div class="header">
        <img src="../images/alqalam_logo.png" alt="">
        <h2>Department of Computer Science</h2>
        <h3>Al-Qalam University, Katsina</h3>
    </div>
<?php 
$sql = "SELECT * FROM course";
$result = $conn->query($sql);

$rows = $result->fetchAll(PDO::FETCH_ASSOC);
// $row = mysqli_fetch_assoc($result);

foreach($rows as $row){


?>
    <div class="course_details">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Course Code: <?php echo $row['courseCode']; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        <h3  style="position: relative; right:-250px;"><u>Course Title:<?php echo $row['courseTitle']; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        <h3 style="position: relative; right:-350px;"><u>Date:<?php echo $row['dayTime']; ?></u></h3>
        
    </div>
    <?php } ?>
    <button id="print" style="position: relative; left:20px;" onclick="printer()">Print</button>
<div class="table-container">
      <h2 style="text-align:center;"><u>Assigned Seating Arrangements</u></h2>
      <table>
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Matric No.</th>
            <th>Seat Number</th>
            <th>Hall</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add rows dynamically using JavaScript/PHP based on the assigned seating arrangements -->
      <?php
       
        // TODO: Update the database connection details
       include "connection.php";


if(isset($_POST['details'])){
    $venue = $_POST['venue'];

        $sn = 1;
        $stmt = $conn->query("SELECT * FROM arrange WHERE venue='$venue'");
        $arranged = $stmt->fetchAll(PDO::FETCH_ASSOC);

       echo "<tbody>";
    
    foreach ($arranged as $arrange) {
      // foreach ($examHalls as $hall){
       
         
        echo "<tr>";
        echo "<td>{$arrange['name']}</td>";
        echo "<td>{$arrange['matric_no']}</td>";
        echo "<td>".$sn++."</td>";
        echo "<td>{$arrange['venue']}</td>";
        echo "</tr>";
      // } 
    }
}
    ?>

    <script>
        function printer(){
            document.getElementById('print').style.visibility = 'hidden';
            print();
            document.getElementById('print').style.visibility = 'visible';

        }
    </script>
        </tbody>
      </table>
</div>
</body>
</html>