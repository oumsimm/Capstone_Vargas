<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <aside class="sidebar">
        <div class="logo">Dashboard</div>
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
</html>
