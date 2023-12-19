<?php
// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname ='resume_db';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate employee ID
    $employee_id = mysqli_real_escape_string($conn, $_POST["id"]);

    // Retrieve employee details from the database
    $sql = "SELECT * FROM resume WHERE id = '$employee_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display employee details
        $row = $result->fetch_assoc();
        $CandidateDetails = [
            'ID' => $row["id"],
            'Name' => $row["name1"],
            'Phone Number' => $row["Phone"],
            'Email' => $row["email"],
            'Skills' => $row["skills"],
            'Experience'=> $row["experience"],
            
        ];
    } else {
        $error = "Candidate not found";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn {
            width: 100%;
        }
        .result {
            margin-top: 20px;
        }
        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Candidate ID</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="id">Candidate ID:</label>
                <input type="text" class="form-control" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php elseif (isset($CandidateDetails)) : ?>
            <div class="result">
                <h3>Candidate Details</h3>
                <?php foreach ($CandidateDetails as $key => $value) : ?>
                    <p><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
