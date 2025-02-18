<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>George Vargas</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-logo">
                <a href="#">E Serbisyo</a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="http://localhost/Vargas_capstone/Home.php">Game</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Members</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <section class="hero-section">
            <div class="hero-content">
                <h1>Sample capstone <br> System</h1>
            </div>

            <div class="login-container">
                <form class="login-form" action="process_signup.php" method="POST">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                    <p class="form-footer">Don't have an account? <a href="SignUp.php" style="color: rgb(8, 74, 255);">Sign up here  </a></p>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
