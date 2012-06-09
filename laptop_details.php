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
<script type="text/javascript">
function getXMLHTTP() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  return xmlHttp;
}
function getDetails() {	
	var strURL="contact_supplier1.php";
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						
						document.getElementById('txtHint').innerHTML=req.responseText;	
					} else {
						alert(req.responseText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
    }

</script>
<div class="container showgrid">
<?php
session_start();
$family=$_POST['family'];
$link=mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test1');
echo "<h3>The selected family ".$family." has the following specifications</h3>";
$sql="SELECT * FROM description WHERE family='$family'";
$result = mysql_query($sql);
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}


echo "<table border='1'>
<tr>
<th>Price</th>
<th>CPU-Speed</th>
<th>CPU-Type</th>
<th>Brand</th>
<th>Family</th>
<th>Weight</th>
<th>Size</th>
<th>Ram</th>
<th>Bus</th>
<th>Hard-disk</th>
<th>Floppy</th>
<th>Cd-Rom</th>
</tr>";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  $_SESSION['lid']=$row['lid'];
  //$_SESSION['sid']=$row['sid'];
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['cpuspeed'] . "</td>";
  echo "<td>" . $row['cputype'] . "</td>";
  echo "<td>" . $row['brand'] . "</td>";
  echo "<td>" . $row['family'] . "</td>";
  echo "<td>" . $row['weight'] . "</td>";
  echo "<td>" . $row['size'] . "</td>";
  echo "<td>" . $row['ram'] . "</td>";
  echo "<td>" . $row['bus'] . "</td>";
  echo "<td>" . $row['harddisk'] . "</td>";
  echo "<td>" . $row['floppy'] . "</td>";
  echo "<td>" . $row['cdrom'] . "</td>";
  echo "</tr>";
    echo "<tr>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($link);

echo"<h5><br><a href='contact_supplier.php'>Click</a> here to contact supplier</h5>";
?>
</div>
</div>
<div id="txtHint"><b></b></div>
</div>
</html>