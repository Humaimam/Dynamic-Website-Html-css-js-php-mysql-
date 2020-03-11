<?php
echo "<form method=post action=abcd.php";
echo "<label>Comment</label><input name=cmt type=text value=".$_POST['comment']." />";
echo "<label>Name</label><input name=nm type=text />";
echo "<label>Email</label><input name=em type=text />";
echo "<label>Password</label><input name=pwd type=password />";
echo "<input type=submit value=post /></form>";

?>