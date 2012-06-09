

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
<div class="container showgrid">
<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$id=$_SESSION['sid'];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test', $con);

$sql="SELECT * FROM supplier WHERE id = '".$id."'";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
  echo "<table border=1>";
  echo "<tr>";
  $name=$row['name'];
  echo "</tr>";
  echo "<tr>";
  $address=$row['address'];
  echo "</tr>";
  echo "<tr>";
  $phone=$row['phone'];
  echo "</tr>";
  echo "<tr>";
  $URL=$row['URL'];
  echo "</tr>";
  echo "<tr>";
  $fax= $row['Fax'];
  echo "</tr>";
  }
echo "</table>";?>
<html>
<div class="error">
<h1> Edit Supplier Information</h1>
<form action='userprofile_edit1.php' method='POST'>
<table>
	<tr>
		<td>
		Supplier full name:
		</td>
		<td>
		<input type='text' name='fullname' value='<?php echo $name;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Phone:
		</td>
		<td>
		<input type='text' name='phone' value='<?php echo $phone;?>'>
		</td>
	</tr>
	<tr>
		<td>
		URL:
		</td>
		<td>
		<input type='text' name='URL' value='<?php echo $URL;?>'>
		</td>
	</tr>
	<tr>
		<td>
		FAX:
		</td>
		<td>
		<input type='text' name='fax' value='<?php echo $fax;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Address:
		</td>
		<td>
		<input type='text' name='address' value='<?php echo $address;?>'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit' onclick='aa()'>
</p>
</div>
</div>
</html>