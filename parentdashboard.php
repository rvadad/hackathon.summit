<?php
include aup.php;
include config.php;

?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<div id="cclayout1"><h2>Welcome $parentname</h2>
<h5><a href="index.html">Home</a></h5>
<h4>Parent Tools:</h4>
<p></p><table cellspacing='2' cellpadding='2'>
<tr>
<td><a href='add_child.php'>Add Child</a></td>
<td><a href='edit_child.php'>Edit Child</a></td>
</tr><tr><td><a href='add_chore.php'>Add Chore</a></td>
<td><a href='edit_chore.php'>Edit Chore</a>
</td>
</tr>
</table><br>
<b>Set Exchange Rate:</b>
<p><table><tr><td>Current Rate</td><td></td><td>points for 1 hour</td></tr>
<tr><td></td><td>M</td><td></td><td>points for 15 minutes</td></tr></table><br>
<b>Record Child's Comp Time Used:</b>
<p>How much time did your child spend on the last computer session?</p><br>
<form method="post" name="form" action="deducttime.php" onSubmit="return verify();" >
<input type="number" name="ctimeh" id="ctimeh" value="0" />Hours<br>
<input type="number" name="ctimem" id="ctimem" value="0" />Minutes
<<input type="submit" name="deducttime" id="deducttime" value="Record Used Time" />

</div>
<?php ?>