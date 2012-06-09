<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Blueprint Sample Page</title>



</head>

<body>

	<div class="container showgrid"> 
<?php
session_start();
$family=$_GET['family'];
$brand=$_GET['brand'];
$id=$_SESSION['sid'];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test1', $con);

$sql="SELECT * FROM supplier WHERE id='$id'";

$result = mysql_query($sql);
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Rating</th>
<th>URL</th>
<th>Fax</th>
<th>Address</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['rating'] . "</td>";
  echo "<td>" . $row['URL'] . "</td>";
  echo "<td>" . $row['Fax'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
</div>
</body>
</html>