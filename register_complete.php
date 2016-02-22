<head>

<?php
include "config.php";
?>

<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>
<body> 

<table border=0 cellspacing=0 cellpadding=0 width="100%" height="100%">
<tr>
<td align=center valign=middle>

<table border=0 cellspacing=5 cellpadding=0>
<tr>
<td align=center>
<img src="images/register.png">
</td>
</tr>
<tr>
<td align=center>
<?php

$father_name = $ffirstname." ".$flastname;
$mother_name = $mfirstname."".$mlastname;
$password = md5($password_1);

$result = mysql_query ("SELECT * FROM cc_parent WHERE email = '$email'");
$duplicate = mysql_fetch_array($result);

if(!@$duplicate AND $username != "" AND $password != "" AND $email_address != "" AND $father_name != "") {
$query = "INSERT INTO cc_parent
(username,password,email,father_name,mother_name)
VALUES
('$usrnme','$password','$email','$ffirstname','$zip')";
$req = mysql_query($query);
if (!$req) {echo "<B>Error ".mysql_errno()." :</B> ".mysql_error().""; exit;} 

print ($lang_reg["thx"]."<p><a href=\"index.php\">".$lang_aup["login"]."</a>");

} else {print ("<big>".$lang_reg["not"]."</big><p>".$lang_reg["not2"]."<p><a href=\"index.php\">".$lang_aup["login"]."</a><p><a href=\"register.php\">".$lang_reg["try"]."</a>");}

?>
<!-- Yes, Ambre', I am aware that this is male favoring programming at the moment. There is nothing meant by this other than order of convience however, once I discovered the pattern that arose I felt it note worthy-->
</td>
</tr>
</table>
<a href="parentdashboard.php">Back To Dashboard</a>

</td>
</tr>
</table>