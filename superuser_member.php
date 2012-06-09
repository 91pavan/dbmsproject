<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
if($_SESSION['username2'])
{
echo "Welcome,".$_SESSION['username2']."!<br>";




echo "<a href='supplier_add.php'>Add supplier?</a>";
echo "<br>";
echo "<br>";
echo "<a href='supplier_delete.php'>Remove supplier?</a>";
echo "<br>";
echo "<br>";
echo "<a href='user_logout.php'>Click</a> here to log out";
}
else
die("You must be logged in!");

?>
</div>
</html>