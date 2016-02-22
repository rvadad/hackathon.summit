INSERT INTO `cc_chore`(`id`, `tasktitle`, `taskdescr`, `pointvalue`, `chorechild`, `openassign`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
<br>
<h2><form action="insert_chore.php" method="post">     
Task Title: <input type="text" name="tasktitle" />
Task Description: <input type="text" name="taskdescr" />
Point Value: <input type="text" name="pointvalue" />
Assign Chore to Child: <input type="text" name="chorechild" />
Make Open to all Children: <input type="text" name="openassign" />
<input type="Submit" /></form></h2>
<a href="parentdashboard.php">Back To Dashboard</a>