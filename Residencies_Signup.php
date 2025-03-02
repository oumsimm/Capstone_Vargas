<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="residencies_Signup.css">
</head>
<body>
    <div class="form-container">
        <h1>Sign Up</h1>
        
        <form action="process_signup.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <div id="gender">
                    <input type="checkbox" id="male" name="gender[]" value="male">
                    <label for="male">Male</label>
                    <input type="checkbox" id="female" name="gender[]" value="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <select id="address" name="address" required>
                    <option value="" disabled selected>Select your address</option>
                    <option value="Sta rosa">Sta Rosa</option>
                    <option value="Wawa">Wawa</option>
                    <option value="Bahay">Bahay</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Lopez Jaena">Lopez Jaena</option>
                </select>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required placeholder="Enter your age" min="1">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
            <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="" disabled selected>Select your status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password" minlength="8">
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <p class="login-link">Already have an account? <a href="http://localhost/Vargas_capstone/Login.php">Log in</a></p>
    </div>
</body>
</html>
