<!DOCTYPE html>
<html>
<head>
    <title>Exam Venue Selection</title>
    <style>
        /* CSS Styling for the page */
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="./">&lt;Back to Dashboard</a>
    <h1 style="text-align:center;">Generate Report</h1>
    <div class="container">
        <h2>Select Exam Venue</h2>
        <form action="view_result.php" method="POST">
            <select name="venue">
                <option value="">Select Venue/Hall</option>
                <?php
                // TODO: Update the database connection details
             include 'connection.php';
                try {
                    // Create a new PDO instance
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Fetch the venue options from the 'arrange' table
                    $stmt = $conn->query("SELECT DISTINCT venue FROM arrange");
                    $venues = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Generate the <option> elements for the dropdown
                    foreach ($venues as $venue) {
                        echo '<option value="' . $venue['venue'] . '">' . $venue['venue'] . '</option>';
                    }

                    // Close the database connection
                    $conn = null;

                } catch (PDOException $e) {
                    die("Error: " . $e->getMessage());
                }
                ?>
            </select>
            <input type="submit" value="Submit" name="details">
        </form>
    </div>
</body>
</html>
