<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Laptop Information Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li><a href="index.html"><strong>Home</strong></a></li>
      <li class="active"><a href="user_member.php"><strong>Browse Laptops</strong></a></li>
      <li><a href="Register.html"><strong>Register</strong></a></li>
      <li><a href="Login.html"><strong>Login</strong></a></li>
      <li><a href="SupplierLogin.html"><strong>Administrator Login</strong></a></li>
      <li><a href="map.html"><strong>Map</strong></a></li>
	 </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">Laptops Galore</a></h1>
      <p></p>
    </div>
    
  </div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <?php
session_start();
if($_SESSION['username'])
{
echo "<h2>Welcome,".$_SESSION['username']."</h2>";
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('test1', $con);
echo "<h4>Please select the family from which you want to buy.<h4>";
$result=mysql_query("SELECT DISTINCT family from description");

?>
<form action="laptop_details.php" method="post">
<select name="family" id="family">
 <option value="" selected="selected"></option>
	<?php while($row=mysql_fetch_array($result))
{ 
echo "<option value=".$row['family'].">".$row['family']."</option>";
} ?>
</select>
<input type="Submit" value="Submit">
</form>
<?php
echo "<br>";
echo "<br><a href='user_logout.php'>Click</a> here to log out";
echo "<br>";
 ?>

<?php }
else
	echo "Please login to view this file!";
?>
  </div>
  
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
</div>


  </div>
</div>
</body>
</html>