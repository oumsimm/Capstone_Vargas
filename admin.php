<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <script>
        // Show/Hide Password Function
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var toggleButton = document.getElementById("toggleButton");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.textContent = "👁️";
            } else {
                passwordField.type = "password";
                toggleButton.textContent = "🔒";
            }
        }

        // Client-side Validation
        function validateForm() {
            var email = document.getElementById("email").value.trim();
            var password = document.getElementById("password").value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!email || !password) {
                alert("Please enter your email and password.");
                return false;
            }
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            return true;
        }
    </script>
    
</head>
<body>
    <div class="box">
    <div class="login">
    <div class="loginBx">
    <form class="login-form" action="Homepage.php" method="POST" onsubmit="return validateForm();">
                <h2>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Admin</h2>
                <input type="text" id="email" name="text" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Sign in" onclick="return validateForm()"/>
                <a href="#">Forgot Password</a>
                <a href="SignUp.php">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>