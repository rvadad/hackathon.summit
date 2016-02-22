<?php
$username="root";
$password="hackathon";$database="cc_db";
$tasktitle=$_POST['tasktitle'];
$taskdescr=$_POST['taskdescr'];
$pointvalue=$_POST['pointvalue'];
$chorechild=$_POST['chorechild'];
$openassign=$_POST['openassign'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO cc_chore VALUES('','$tasktitle','$taskdescr',
'$pointvalue','$chorechild','$openassign')";mysql_query($query);mysql_close();
echo "Record updated successfully :<br><a href='parentdashboard.php'>Return To Dashboard</a>";
?>