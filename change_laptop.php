<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<body>
<form action="change_laptop1.php" method="post">
<div class="notice">
<h2></h2></div>
<?php 
session_start();
$sid=$_SESSION['sid'];
if($_SESSION['username1'])
{
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test', $con);

$sql="SELECT DISTINCT laptopid FROM description  WHERE sid='$sid'";

$result = mysql_query($sql); ?>
<table>
<tr>
<div class="alt">
<p><b>Please Choose the Lid of the Laptop</b></p>
</div>
<select name="lid" id="lid">
 <option value="" selected="selected"></option>
	<?php while($row=mysql_fetch_array($result))
{ 
echo "<option value=".$row['laptopid'].">".$row['laptopid']."</option>";
} ?>
</tr>
</table>
</select>
<input type="Submit" value="Submit">
</form>
<?php } ?>
</body>
</div>
</html>