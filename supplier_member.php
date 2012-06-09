<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
if($_SESSION['username1'])
{
echo "Welcome,".$_SESSION['username1']."!<br>";
echo "<br>";
echo "<a href='remove_laptop.php'>Remove Laptop?</a> <br>";
echo "<br>";
echo "<br>";
echo "<a href='supplier_laptopinsert.php'>Insert Laptop</a> <br>";
echo "<br>";
echo "<br>";
echo "<a href='change_laptop.php'>Change details of a laptop?</a> <br>";
echo "<br>";
echo "<br>";
echo "<a href='userprofile_edit.php'>Modify your profile?</a><br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='user_logout.php'>Click</a> here to log out";
}
else
die("You must be logged in!");

?>
</div>
</html>