<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="Settings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <aside class="sidebar">
        <div class="logo">Settings</div>
        <ul>
            <li onclick="window.location.href='Homepage.php'"><i class="fa-solid fa-house"></i> Homepage</li>
            <li onclick="window.location.href='Residencies.php'"><i class="fa-solid fa-users"></i> Residencies</li>
            <li onclick="window.location.href='Settings.php'"><i class="fa-solid fa-cogs"></i> Settings</li>
            <li class="logout" onclick="location.href='Logout.php'"><i class="fa-solid fa-sign-out-alt"></i> Log out</li>
        </ul>
    </aside>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".sidebar ul li").forEach(item => {
                item.addEventListener("click", function() {
                    document.querySelectorAll(".sidebar ul li").forEach(li => li.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
        </script>
    </body>
    <body>
        <div class="settings-container">
        <div class="section">
            <h3>Account</h3>
            <div class="option"><i class="fa-solid fa-user"></i> Edit profile</div>
            <div class="option"><i class="fa-solid fa-lock"></i> Security</div>
            <div class="option"><i class="fa-solid fa-bell"></i> Notifications</div>
            <div class="option"><i class="fa-solid fa-shield-alt"></i> Privacy</div>
        </div>
        <div class="section">
            <h3>Support & About</h3>
            <div class="option"><i class="fa-solid fa-file-invoice"></i> My Subscription</div>
            <div class="option"><i class="fa-solid fa-circle-question"></i> Help & Support</div>
            <div class="option"><i class="fa-solid fa-info-circle"></i> Terms and Policies</div>
        </div>
        <div class="section">
            <h3>Actions</h3>
            <div class="option"><i class="fa-solid fa-exclamation-triangle"></i> Report a problem</div>
            <div class="option"><i class="fa-solid fa-user-plus"></i> Add account</div>
        </div>
    </div>
</body>
</html>
