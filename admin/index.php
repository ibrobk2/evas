<?php
include "connection.php";
require('fpdf/fpdf.php');
// Variable to track the reset status
$resetStatus = false;

// Variable to track the registration status
$registrationStatus = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
    // Create a new PDO instance
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Perform the necessary reset operations
    // Delete all data from the necessary tables or perform any other required actions
    
    // Example: Resetting the students and exam_halls tables
    $conn->exec("TRUNCATE TABLE students");
    $conn->exec("TRUNCATE TABLE exam_halls");
    
    // Set the reset status to true
    $resetStatus = true;
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Exam Venue Allocation and Seat Arrangements System</title>
  <!-- Sweet Alert -->
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

    .btn-primary, #hall_btn{
      padding: 10px;
      border: none;
      ouline: none;
      color: white;
      background-color: dodgerblue;
      border-radius: 6px;
    }

    .btn-primary:hover{
      cursor: pointer;
      opacity: 0.85;
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
   <script>
    function confirmReset() {
      return confirm("Are you sure you want to reset the system? This action cannot be undone.");
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Exam Venue Allocation and Seat Arrangements System</h1>
    
   
    
    <div class="form-container">
      <p style="color:red;"><b>NB: Please finish registering ALL venues before uploading student data.</b></p>
      <h2>Register/Create Exam Hall</h2>
      <!-- Add form elements for registering or creating exam halls -->
      <?php if ($registrationStatus): ?>
    <p>The exam hall has been registered successfully.</p>
  <?php endif; ?>
  
  <form method="post" action="register_hall.php">
    <label for="hall_name">Hall Name:</label>
    <input type="text" name="hall_name" id="hall_name" required>
    <br>
    <br>
    <label for="capacity">Capacity:</label>
    <input type="number" name="capacity" id="capacity" required>
    <br>
    <br>
    <button type="submit" id="hall_btn">Register Hall</button>
  </form>
    
    </div>

    <!-- <div class="form-container">
      <h2>Course Details:</h2>
    <form method="post" action="course.php">
    <label for="course code">Course Code:</label>
    <input type="text" name="code" id="code" required>
    <br>
    <br>
    <label for="course title">Course Title:</label>
    <input type="text" name="title" id="title" required>
    <br> <br>
     <label for="capacity">Date:</label>
    <input type="date" name="datetime" id="date" required style="width:220px;">
    <br>
    <br>
    <button type="submit" id="course_btn">Add Details</button>
  </form>
    </div> -->


    <!-- Upload data section -->
    <div class="form-container">
      <h2>Upload Students File</h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".csv" required>
        <input type="submit" value="Upload" class="button">
      </form>
    </div>
    

    
    <div class="table-container">
      <h2>Invigilators</h2>
      <h3>Register Invigilator</h3>
      <form action="inv_reg.php" style="padding: 7px;" method="POST">
        <input type="text" name="inv" placeholder="Enter Invigilator's Name">
        <!-- <input type="text" name="venue" placeholder="Enter Exam Venue"> -->
        <select name="venue" id="">
          <option value="">Select</option>
          <?php
          $sql = "SELECT * FROM exam_halls";
          $res = $conn->query($sql);

          $rows = $res->fetchAll(PDO::FETCH_ASSOC);

          foreach($rows as $row){
            echo "<option value='".$row['name']."'>".$row['name']."</option>";
          }

?>
          
        </select>
        <input type="time" name="time" placeholder="Enter Time For Exam">
        <button class="primary">Register</button>
      </form>
      <br>
      <br>
      <table>
        <thead>
          <tr>
            <th>Invigilator Name</th>
            <th>Venue</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add rows dynamically using php based on the assigned invigilators -->
          <?php
          include "../admin/connection.php";

          
          $sql =$conn->query("SELECT * FROM faculty");
          // $res = mysqli_query($conn, $sql);
          $rows=$sql->fetchAll(PDO::FETCH_ASSOC);

          foreach($rows as $row){
            echo "
            <tr>
            <td>".$row['INVIGILATOR_NAME']."</td>
            <td>".$row['ROOM_NO']."</td>
            <td>".$row['TIMING']."</td>
            </tr>
            ";
          }
          ?>
         
        
          
        </tbody>
        
      </table>
    </div>
    
    <div class="form-container">
      <h2>Reset System</h2>
      <!-- Add form elements and JavaScript logic to reset the system -->
      <?php if ($resetStatus): ?>
    <p>The system has been reset successfully.</p>
  <?php endif; ?>
  
  <form method="post" onsubmit="return confirmReset()" action="reset.php">
    <button type="submit" style="padding: 10px; background-color: red;color: azure; border:none; border-radius: 5px; cursor:pointer;">Reset System</button>
  </form>
    </div>
    
    <div class="form-container">
      <h2>Generate Reports</h2>
      <!-- Add form elements and JavaScript logic to generate reports in PDF or Excel format -->
      <form action="arrangement2.php">
        <button class="btn btn-primary">Generate Report</button>
        <button class="btn btn-primary" type="button" onclick="print_seat()">Print Seat Allocation</button>
        <button class="btn btn-primary" type="button" onclick="print_seat2()">Print Invigilators Copy</button>
        <!-- <button class="btn btn-primary" onclick="sweet()" type="button">Sweet Test</button> -->
      </form>
    </div>
  </div>
  
  <script>
    
    // Implement any additional functionalities as required

    function print_seat(){
      window.location = "fetch_details.php";
    } 
    
    function print_seat2(){
      window.location = "fetch_details2.php";
    }

    function sweet(){
      Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
    }
  </script>
</body>
</html>
