<?php
// Database connection
$servername = "localhost"; // Change if your database is on another server
$username = "root"; // Default username in XAMPP
$password = ""; // Default is empty in XAMPP
$database = "vargas_signup_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}

// Insert data into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Error: Passwords do not match.");
    }

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $hashedConfirmPassword = password_hash($confirm_password, PASSWORD_BCRYPT); // Secure confirm password

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT Email FROM acc_mngment WHERE Email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        die("Error: Email already exists. Please use a different email.");
    }
    $checkEmail->close();

    // Prepare and execute the SQL statement securely
    $stmt = $conn->prepare("INSERT INTO acc_mngment (Name, Email, Password, Confirm_password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $hashedConfirmPassword);

    if ($stmt->execute()) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Redirecting...</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                    margin-top: 50px;
                    background-color: #f4f4f4;
                }
                .countdown-container {
                    font-size: 30px;
                    font-weight: bold;
                    color: #333;
                    margin-top: 20px;
                }
                .countdown {
                    font-size: 50px;
                    font-weight: bold;
                    color: #ff5733;
                    animation: countdownAnim 1s ease-in-out infinite;
                }
                @keyframes countdownAnim {
                    0% { transform: scale(1); color: #ff5733; }
                    50% { transform: scale(1.5); color: #ffbd33; }
                    100% { transform: scale(1); color: #ff5733; }
                }
            </style>
        </head>
        <body>
            <h2>Record added successfully!</h2>
            <p>Redirecting to login page in <span class='countdown' id='countdown'>3</span> seconds...</p>
            
            <script>
                var timeLeft = 3;
                var countdownElement = document.getElementById('countdown');

                var countdownTimer = setInterval(function() {
                    timeLeft--;
                    countdownElement.textContent = timeLeft;
                    if (timeLeft <= 0) {
                        clearInterval(countdownTimer);
                        window.location.href = 'admin.php';
                    }
                }, 1000);
            </script>
        </body>
        </html>";
    } else {
        echo "Error: {$stmt->error}";
    }

    // Close the statement
    $stmt->close();
    $conn->close();
}
?>
