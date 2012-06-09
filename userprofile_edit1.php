<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
$id1=$_SESSION['sid'];
$phone=$_POST['phone'];
$name=$_POST['fullname'];
$fax=$_POST['fax'];
$URL=$_POST['URL'];
$address=$_POST['address'];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test', $con);
$query=mysql_query("UPDATE supplier SET name='$name',address='$address',phone='$phone',URL='$URL',Fax='$fax' WHERE id='$id1'");
echo "<h5>Database is updated!</h5>";
die("Supplier Info has been Edited.<br>Go back to the members page<a href='supplier_member.php'>Click Here!</a>");
?>
</div>
</html>