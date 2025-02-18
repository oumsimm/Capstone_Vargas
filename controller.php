<?php
function Get_All_Users(){
include 'connect_db.php';
$query = $connect->prepare("SELECT * FROM `acc_mngment` ORDER BY Name ASC");
$query->execute();
foreach ($query as $user_row) {
 $user_id = $user_row['UserID'];
 $user_name = $user_row['Name'];
 $user_email = $user_row['Email'];
 $user_pass = $user_row['Password'];
 $user_confirmpass = $user_row['Confirm_password'];
 echo "
 <tr>
 <td class='users_td'>$user_id</td>
 <td class='users_td'>$user_name</td>
 <td class='users_td'>$user_email</td>
 <td class='users_td'>$user_pass</td>
 <td class='users_td'>$user_confirmpass</td>
 
 </tr>";
}
$query = null;
$connect = null;
}
?>