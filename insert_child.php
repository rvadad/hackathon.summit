<?php
$username="root";
$password="hackathon";$database="cc_db";
$first=$_POST['first'];
$last=$_POST['last'];
$bday=$_POST['bday'];
$img_path=$_POST['img_path'];
$pass=$_POST['pass'];
$nickname=$_POST['nickname'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO cc_child VALUES('','','$first','$last',
'$bday','','','',$img_path','$pass,$nickname')";mysql_query($query);mysql_close();
echo "Record updated successfully :<br><a href='parentdashboard.php'>Return To Dashboard</a>";
?>