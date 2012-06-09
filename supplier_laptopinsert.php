<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
$sid=$_SESSION['sid'];
//form data
error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');
if($submit)
{
	if($price && $cpuspeed && $cputype && $brand && $family && $weight && $size && $ram && $bus && $harddisk && $cdrom)
	{
	$query=mysql_query("INSERT INTO description (price,cpuspeed,cputype,brand,family,weight,size,ram,bus,harddisk,floppy,cdrom,sid,lid) VALUES ('$price','$cpuspeed','$cputype','$brand','$family','$weight','$size','$ram','$bus','$harddisk','$floppy','$cdrom','$sid','')");
	die("Laptop has been Added.<br>Go back to the members page<a href='supplier_member.php'>Click Here!</a>");

	}
	else
	{
	die("<h2>Please enter all the details of the Laptop</h2>");
	}
}
?>
</html>
<html>

<div class="success">
<h1>Insert a Laptop</h1>
<form action='supplier_laptopinsert.php' method='POST'>
<table>
	<tr>
		<td>
		Price:
		</td>
		<td>
		<input type='text' name='price'>
		</td>
	</tr>
	<tr>
		<td>
		CPU Speed:
		</td>
		<td>
		<input type='text' name='cpuspeed' >
		</td>
	</tr>
	<tr>
		<td>
		CPU Type:
		</td>
		<td>
		<input type='text' name='cputype'>
		</td>
	</tr>
	<tr>
		<td>
		Brand:
		</td>
		<td>
		<input type='text' name='brand'>
		</td>
	</tr>
	<tr>
		<td>
		Family:
		</td>
		<td>
		<input type='text' name='family'>
		</td>
	</tr>
	<tr>
		<td>
		Weight:
		</td>
		<td>
		<input type='text' name='weight'>
		</td>
	</tr>
	<tr>
		<td>
		Size:
		</td>
		<td>
		<input type='text' name='size'>
		</td>
	</tr>
	<tr>
		<td>
		RAM:
		</td>
		<td>
		<input type='text' name='ram'>
		</td>
	</tr>
	<tr>
		<td>
		Bus:
		</td>
		<td>
		<input type='text' name='bus'>
		</td>
	</tr>
	<tr>
		<td>
		Hard Disk:
		</td>
		<td>
		<input type='text' name='harddisk'>
		</td>
	</tr>
	<tr>
		<td>
		Floppy:
		</td>
		<td>
		<input type='text' name='floppy'>
		</td>
	</tr>
	<tr>
		<td>
		CD Rom:
		</td>
		<td>
		<input type='text' name='cdrom'>
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