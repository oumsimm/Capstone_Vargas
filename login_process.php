<?php
session_start();
include 'connect_db.php'; // Make sure it correctly initializes $pdo

// Initialize login attempts tracking
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

// Brute-force protection: Lock account temporarily after too many failed attempts
if ($_SESSION['login_attempts'] >= 10) {
    die("Too many failed login attempts. Please try again later.");
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prevent empty input fields
    if (empty($email) || empty($password)) {
        header("Location: Login.php?error=Please enter both email and password");
        exit();
    }

    try {
        // Securely fetch user data
        $stmt = $pdo->prepare("SELECT UserID, Email, Password FROM acc_mngment WHERE Email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password hash
        if ($user && password_verify($password, $user['Password'])) {
            // Secure session management
            session_regenerate_id(true);
            $_SESSION['UserID'] = $user['UserID'];
            $_SESSION['Email'] = $user['Email'];
            $_SESSION['login_attempts'] = 0; // Reset failed attempts

            // Log successful login
            file_put_contents("logs/login.log", date("Y-m-d H:i:s") . " - SUCCESS - User: $email\n", FILE_APPEND);

            // Redirect to homepage
            header("Location: Homepage.php?message=Welcome, " . urlencode($user['Email']));
            exit();
        } else {
            $_SESSION['login_attempts']++; // Increment failed attempts

            // Log failed login attempt
            file_put_contents("logs/login.log", date("Y-m-d H:i:s") . " - FAILED - User: $email\n", FILE_APPEND);

            header("Location: Login.php?error=Invalid email or password");
            exit();
        }
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage()); // Log errors instead of exposing them
        header("Location: Login.php?error=An error occurred. Please try again later.");
        exit();
    }
}
?>
