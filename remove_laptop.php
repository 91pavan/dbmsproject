<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
if($_SESSION['username1'])
{
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$sid=$_SESSION['sid'];
$submit=$_POST['Delete'];
$lid=$_POST['lid'];
if($submit)
{
if($lid)
{
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('test1');
				$query=mysql_query("DELETE FROM description WHERE lid='$lid'") or die(mysql_error());
				die("Laptop has been successfully removed! <a href='supplier_member.php'>Click</a>here to go to the member page");
}
else
	echo "Please enter a Laptop ID!";
}

?>
<html>
<div class="success">
<h1>Remove Laptop</h1>
<form action='remove_laptop.php' method='POST'>
<table>
	<tr>
		<td>
		Laptop ID:
		</td>
		<td>
	<select name="lid" id="lid">
 <option value="" selected="selected"></option>
	<?php 
		$connect=mysql_connect("localhost","root","");
		mysql_select_db('test');
	$sql="SELECT DISTINCT laptopid FROM description WHERE sid='$sid'";

$result1 = mysql_query($sql);
while($row=mysql_fetch_array($result1))
{ 
echo "<option value=".$row['laptopid'].">".$row['laptopid']."</option>";
} ?>
		</td>
	</tr>
	<td>
	<input type='Submit' value='Delete' name='Delete'>
	<td>
	</tr>
</table>
</form>
</div>
</div>
<?php 
} 
else
	echo "Please login as supplier to access this page!";
	?>
</html>
