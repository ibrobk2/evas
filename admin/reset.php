<?php
// TODO: Perform necessary operations to reset the system for another exam
// Modify the following code to match your database configuration and reset requirements
    include "connection.php";

try {
  // Create a new PDO instance
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Reset the system for another exam
  
  // 1. Delete all existing student records
  $conn->exec("DELETE FROM students"); 
  $conn->exec("DELETE FROM course");
  
  // 2. Delete all existing exam hall records
  $conn->exec("DELETE FROM exam_halls");
  
  // 3. Reset the auto-increment value for student_id column
  $conn->exec("ALTER TABLE students AUTO_INCREMENT = 1");
  $conn->exec("ALTER TABLE course AUTO_INCREMENT = 1");
  
  // 4. Reset the auto-increment value for hall_id column
  $conn->exec("ALTER TABLE exam_halls AUTO_INCREMENT = 1");
  // 5. Delete the arrange table
  $conn->exec("DELETE FROM arrange");
   // 4. Reset the auto-increment value for hall_id column
   $conn->exec("ALTER TABLE arrange AUTO_INCREMENT = 1");

  // 5. Delete the faculty(invilator) table
  $conn->exec("DELETE FROM faculty");
   // 4. Reset the auto-increment value for hall_id column
   $conn->exec("ALTER TABLE faculty AUTO_INCREMENT = 1");
  
  // TODO: Perform any other necessary reset operations
  
  // Redirect back to index.php after successful reset
  header("Location: index.php");
  exit();
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}
?>
