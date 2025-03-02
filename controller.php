<?php
include 'connect_db.php'; // Ensure this file uses PDO

function Get_All_Users() {
    global $pdo; // Use PDO connection

    try {
        $sql = "SELECT UserID, name, Email, Date_Created FROM acc_mngment";
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$users) {
            echo "<tr><td colspan='4'>No users found</td></tr>";
            return;
        }

        foreach ($users as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['UserID']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['Email']) . "</td>
                    <td>" . htmlspecialchars($row['Date_Created']) . "</td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "<tr><td colspan='4'>Error retrieving users: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
    }
}
?>
