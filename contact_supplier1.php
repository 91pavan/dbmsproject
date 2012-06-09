
<?php
session_start();
$family=$_GET['family'];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('test1', $con);
$sql="SELECT brand,sid FROM description WHERE family = '".$family."'";
$result1 = mysql_query($sql);
if($result1 === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
?>
<select name="brand" id="brand" onchange="getDetails1('<?php echo $family?>',this.value)">
 <option value="" selected="selected"></option>
	<?php while($row=mysql_fetch_array($result1))
{ 
$id=$row['sid'];
$_SESSION['sid']=$id;
echo "<option value=".$row['brand'].">".$row['brand']."</option>";
} ?>
</select>