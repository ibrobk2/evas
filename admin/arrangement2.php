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
  <a href="../admin">Back to Dashboard</a>
    <div class="header">
        <img src="../images/alqalam_logo.png" alt="">
        <h2>Department of Computer Science</h2>
        <h3>Al-Qalam University, Katsina</h3>
    </div>

    <div class="course_details">
        <h3>Course Code:........................................</h3>
        <h3>Course Title:.................................................................................................</h3>
        <h3>Date:........................................................................</h3>
        
    </div>
    <a href="arrangement2.php"><button id="print" style="text-align: right;">Assign Hall/Venue</button></a>
    <a href="fetch_details.php"><button id="print" style="text-align: right;">Print Report</button></a>
<div class="table-container">
      <h2 style="text-align:center;"><u>Assigned Seating Arrangements</u></h2>
      <table>
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Matric No.</th>
            <!-- <th>Seat Number</th> -->
            <th>Hall</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add rows dynamically using JavaScript/PHP based on the assigned seating arrangements -->
      <?php
       
        // TODO: Update the database connection details
       include "connection.php";
        
        try {
            // Create a new PDO instance
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       
// Fetch the students from the 'students' table
$stmt = $conn->query("SELECT * FROM students ORDER BY RAND()");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Create the 'arrange' table if it doesn't exist
        $conn->exec("CREATE TABLE IF NOT EXISTS arrange (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255),
            matric_no VARCHAR(11),
            seat_no VARCHAR(255),
            venue VARCHAR(255)
        )");

$sql = "SELECT COUNT(*) as count FROM arrange";
$result = $conn->query($sql);

// Fetch the result of the query
$row = $result->fetch(PDO::FETCH_ASSOC);
$row_count = $row['count'];

if ($row_count == 0) {
        // Insert the shuffled student data into the 'arrange' table
        $stmt = $conn->prepare("INSERT INTO arrange (name, matric_no, seat_no, venue) VALUES (?, ?, ?, ?)");


        foreach ($students as $index => $student) {
        // $rand_num = rand(0, count($examHalls)-1);
            $stmt->execute([$student['name'], $student['matric_no'], $student['student_id'], 'notAvailable']);
        }
    }else{
        
   





            // Fetch the halls from the 'exam_halls' table
            $stmt = $conn->query("SELECT * FROM exam_halls");
            $halls = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            // Fetch the students from the 'students' table
            $stmt = $conn->query("SELECT * FROM arrange");
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            // Assign exam hall to each student
            $assignedHalls = [];
        
            foreach ($students as $student) {
                $assignedHall = null;
        
                // Loop through the halls to find an available hall
                foreach ($halls as $hall) {
                    // Check if the hall capacity is not exceeded
                    if (!isset($assignedHalls[$hall['name']]) || $assignedHalls[$hall['name']] < $hall['seating_capacity']) {
                        $assignedHall = $hall['name'];
                        $assignedHalls[$hall['name']] = isset($assignedHalls[$hall['name']]) ? $assignedHalls[$hall['name']] + 1 : 1;
                        break;
                    }
                }
        
                // Assign the hall to the student in the database
                if ($assignedHall) {
                    $stmt = $conn->prepare("UPDATE arrange SET venue = :name WHERE matric_no = :reg_number");
                    $stmt->bindParam(':name', $assignedHall);
                    $stmt->bindParam(':reg_number', $student['matric_no']);
                    $stmt->execute();
                }
            }
        }
            // Close the database connection
            // $conn = null;
        
            // echo "Exam halls assigned to students successfully.";
        
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

        
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
        // echo "<td>{$arrange['seat_no']}</td>";
        echo "<td>{$arrange['venue']}</td>";
        echo "</tr>";
      // } 
    }

        ?>
        
        </tbody>
      </table>
    </div>
</body>
</html>
