<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="form-container">
        <h1>Sign Up</h1>
        <form action="process_signup.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password" minlength="8">

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password" minlength="8">
            
            <button type="submit">Sign Up</button>
        </form>
        <p class="login-link">Already have an account? <a href="http://localhost/Vargas_capstone/Login.php">Log in</a></p>
    </div>
</body>
</html>
