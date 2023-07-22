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
        <img src="../images/hukpoly_logo.webp" alt="">
        <h2>Department of Computer Science</h2>
        <h3>Hassan Usman Katsina Polytechnic, Katsina</h3>
    </div>

    <div class="course_details">
        <h3>Course Code:........................................</h3>
        <h3>Course Title:.................................................................................................</h3>
        <h3>Date:........................................................................</h3>
        
    </div>
    <button id="print" style="text-align: right;" onclick="print()">Print</button>
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
        // Shuffle the students array to randomize the seating arrangements
       $stmt = $conn->query("SELECT * FROM students ORDER BY RAND()");
       $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

       $hall = "";
        // Fetch the exam hall data from the database
       $stmt2 = $conn->query("SELECT name FROM exam_halls ORDER BY RAND()");
      $examHalls = $stmt2->fetchAll(PDO::FETCH_BOTH);
      
      // var_dump($examHalls);
   
      $conn = null;
    
// Create a new PDO instance
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 // Create the 'arrange' table if it doesn't exist
 $conn->exec("CREATE TABLE IF NOT EXISTS arrange (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    matric_no VARCHAR(11),
    seat_no VARCHAR(255),
    venue VARCHAR(255)
)");

// Insert the shuffled student data into the 'arrange' table
$stmt = $conn->prepare("INSERT INTO arrange (name, matric_no, seat_no, venue) VALUES (?, ?, ?, ?)");


foreach ($students as $index => $student) {
   $rand_num = rand(0, count($examHalls)-1);
    $stmt->execute([$student['name'], $student['matric_no'], $student['student_id'], $examHalls[$rand_num]['name']]);
}


// update exam hall/ venue into the database


// fetch the arranged table
$stmt = $conn->query("SELECT * FROM arrange");
$arranged = $stmt->fetchAll(PDO::FETCH_ASSOC);

  

     
    //  shuffle($students);
 echo "<tbody>";
    
    foreach ($arranged as $arrange) {
      // foreach ($examHalls as $hall){
       
         
        echo "<tr>";
        echo "<td>{$arrange['name']}</td>";
        echo "<td>{$arrange['matric_no']}</td>";
        echo "<td>{$arrange['seat_no']}</td>";
        echo "<td>{$arrange['venue']}</td>";
        echo "</tr>";
      // } 
    }
  
  

      ?>

          <!-- End of Seating Algorithm -->
        </tbody>
      </table>
    </div>
</body>
</html>
