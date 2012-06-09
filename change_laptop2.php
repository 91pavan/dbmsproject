<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
$lid1=$_SESSION['lid'];
$submit=strip_tags($_POST['Submit']);
$price=strip_tags($_POST['price']);
$cpuspeed=strip_tags($_POST['cpuspeed']);
$cputype=strip_tags($_POST['cputype']);
$brand=strip_tags($_POST['brand']);
$family=strip_tags($_POST['family']);
$weight=strip_tags($_POST['weight']);
$size=strip_tags($_POST['size']);
$ram=strip_tags($_POST['ram']);
$bus=strip_tags($_POST['bus']);
$harddisk=strip_tags($_POST['harddisk']);
$floppy=strip_tags($_POST['floppy']);
$cdrom=strip_tags($_POST['cdrom']);
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test', $con);
$query=mysql_query("UPDATE description SET price='$price',cpuspeed='$cpuspeed',cputype='$cputype',brand='$brand',family='$family',weight='$weight',size='$size',ram='$ram',bus='$bus',harddisk='$harddisk',floppy='$floppy',cdrom='$cdrom' WHERE laptopid='$lid1'");
echo "<h5>Database is updated!</h5>";
die("Laptop has been Edited.<br>Go back to the members page<a href='supplier_member.php'>Click Here!</a>");
?>
</div>
</html>