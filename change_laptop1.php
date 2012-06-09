<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">

<div class="error">
<h1>Edit Laptop Information</h1>
<form action='change_laptop2.php' method='POST'>
<?php 
session_start();
$id=$_POST['lid'];
$_SESSION['lid']=$id;
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test', $con);

$sql="SELECT * FROM description WHERE laptopid = '".$id."'";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
  echo "<table border=1>";
  echo "<tr>";
  $price=$row['price'];
  echo "</tr>";
  echo "<tr>";
  $cpuspeed=$row['cpuspeed'];
  echo "</tr>";
  echo "<tr>";
  $cputype=$row['cputype'];
  echo "</tr>";
  echo "<tr>";
  $brand=$row['brand'];
  echo "</tr>";
  echo "<tr>";
  $family= $row['family'];
  echo "</tr>";
  echo "<tr>";
  $weight= $row['weight'];
  echo "</tr>";
  echo "<tr>";
  $size=$row['size'];
  echo "</tr>";
  echo "<tr>";
  $ram=$row['ram'];
  echo "</tr>";
  echo "<tr>";
  $bus=$row['bus'];
  echo "</tr>";
  echo "<tr>";
  $harddisk=$row['harddisk'];
  echo "</tr>";
  echo "<tr>";
  $floppy=$row['floppy'];
  echo "</tr>";
  echo "<tr>";
  $cdrom=$row['cdrom'];
  echo "</tr>";
  echo "<tr>";
  echo "</tr>";
  }
echo "</table>";?>
<form action='change_laptop1.php' method='POST'>
<table>
	<tr>
		<td>
		Price:
		</td>
		<td>
		<input type='text' name='price' value='<?php echo $price;?>' >
		</td>
	</tr>
	<tr>
		<td>
		CPU Speed:
		</td>
		<td>
		<input type='text' name='cpuspeed' value='<?php echo $cpuspeed;?>'>
		</td>
	</tr>
	<tr>
		<td>
		CPU Type:
		</td>
		<td>
		<input type='text' name='cputype' value='<?php echo $cputype;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Brand:
		</td>
		<td>
		<input type='text' name='brand' value='<?php echo $brand;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Family:
		</td>
		<td>
		<input type='text' name='family' value='<?php echo $family;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Weight:
		</td>
		<td>
		<input type='text' name='weight' value='<?php echo $weight;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Size:
		</td>
		<td>
		<input type='text' name='size' value='<?php echo $size;?>'>
		</td>
	</tr>
	<tr>
		<td>
		RAM:
		</td>
		<td>
		<input type='text' name='ram' value='<?php echo $ram;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Bus:
		</td>
		<td>
		<input type='text' name='bus' value='<?php echo $bus;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Hard Disk:
		</td>
		<td>
		<input type='text' name='harddisk' value='<?php echo $harddisk;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Floppy:
		</td>
		<td>
		<input type='text' name='floppy' value='<?php echo $floppy;?>'>
		</td>
	</tr>
	<tr>
		<td>
		CD Rom:
		</td>
		<td>
		<input type='text' name='cdrom' value='<?php echo $cdrom;?>'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
</div>
</div>
</html>