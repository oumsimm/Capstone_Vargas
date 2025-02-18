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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO acc_mngment (Name, Email, Password, Confirm_password)  
VALUES ('$name', '$email', '$password', '$confirm_password')";

    if ($conn->query($sql) === TRUE) {
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
            <p>Redirecting to login page in <span class='countdown' id='countdown'>5</span> seconds...</p>
            
            <script>
                var timeLeft = 5;
                var countdownElement = document.getElementById('countdown');

                var countdownTimer = setInterval(function() {
                    timeLeft--;
                    countdownElement.textContent = timeLeft;
                    if (timeLeft <= 0) {
                        clearInterval(countdownTimer);
                        window.location.href = 'Login.php';
                    }
                }, 1000);
            </script>
        </body>
        </html>";
    } else {
        echo "Error: {$sql}<br>{$conn->error}";
    }
}

// Close connection
$conn->close();
?>
