<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <link rel="stylesheet" href="Logout.css">
</head>
<body>

    <!-- Logout Modal -->
    <div class="modal-box">
        <div class="modal-icon">
            <img src="https://cdn-icons-png.flaticon.com/128/660/660350.png" alt="Logout Icon">
        </div>
        <h2>Logout</h2>
        <p>Are you sure you want to logout?</p>
        <div class="modal-buttons">
            <button class="logout-btn" 
            onclick="window.location.href='http://localhost/Vargas_capstone/admin.php';">Logout</button>            
            <button class="cancel-btn" onclick="location.href='Homepage.php'">Cancel</button>
        </div>
    </div>

</body>
</html>
