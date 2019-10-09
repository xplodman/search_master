<h1>Employees</h1>
<table class="w3-table w3-bordered w3-striped">
    <thead>
    <tr>
        <th>userID</th>
        <th>userName</th>
        <th>userProfession</th>
        <th>userPic</th>
        <th>test_dt</th>
    </tr>
    </thead>
    <tbody>
<?php

require_once 'connect.php';

$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];

$get_users_query = "
SELECT * FROM tbl_users WHERE test_dt BETWEEN '$fromdate' and '$todate'
  ";
$get_users_result = mysqli_query($DB_con, $get_users_query);
while($get_users_info = mysqli_fetch_assoc($get_users_result)) {

    ?>
<tr>
    <td><?php echo $get_users_info['userID'];?></td>
    <td><?php echo $get_users_info['userName'];?></td>
    <td><?php echo $get_users_info['userProfession'];?></td>
    <td><?php echo $get_users_info['userPic'];?></td>
    <td><?php echo $get_users_info['test_dt'];?></td>
</tr>


<?php } ?>
    </tbody>
</table>
