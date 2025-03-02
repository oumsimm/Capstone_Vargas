<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residencies</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Residencies.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">Residencies</div>
            <ul>
            <li onclick="window.location.href='Homepage.php'"><i class="fa-solid fa-house"></i> Homepage</li>
            <li onclick="window.location.href='Residencies.php'"><i class="fa-solid fa-users"></i> Residencies</li>
            <li onclick="window.location.href='Settings.php'"><i class="fa-solid fa-cogs"></i> Settings</li>
            <li class="logout" onclick="location.href='Logout.php'"><i class="fa-solid fa-sign-out-alt"></i> Log out</li>
        </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Residencies List</h1>

            <?php include 'controller.php'; ?>

            <table class="tables" id="usersTable">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Time Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php Get_All_Users(); ?>
                </tbody>
            </table>
        </main>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();

            // Sidebar Active State Handling
            $(".sidebar ul li").click(function() {
                $(".sidebar ul li").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</body>
</html>
