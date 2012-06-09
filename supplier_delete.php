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
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$submit=$_POST['Delete'];
$username=$_POST['username'];
if($submit)
{
if($username)
{

				$connect=mysql_connect("localhost","root","");
				mysql_select_db('test');
				$query=mysql_query("DELETE FROM supplier WHERE username='$username'") or die(mysql_error());
				die("Supplier has been successfully removed! <a href='index.html'>Click</a>here to go out main page");
}
else
	echo "Please enter a Username!";
}

?>
<html>
<div class="success">
<h1>Remove Supplier</h1>
<form action='supplier_delete.php' method='POST'>
<table>
	<tr>
		<td>
		Supplier user name:
		</td>
		<td>
		<input type='text' name='username'>
		</td>
	</tr>
	<td>
	<input type='Submit' value='Delete' name='Delete' onsubmit='aa()'>
	<td>
	</tr>
</form>
</div>
</div>
</html>
