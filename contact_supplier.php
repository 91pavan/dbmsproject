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
	<!-- Import fancy-type plugin for the sample page. -->
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
function getDetails(familyId) {	
	var strURL="/ok1/contact_supplier1.php?family="+familyId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('brand').innerHTML=req.responseText;						
					} else {
						alert(req.responseText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
    }
	function getDetails1(familyId,brandId) {	
	var strURL="/ok1/contact_supplier2.php?family="+familyId+"&brand="+brandId;
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
</head>
<body>
<h2> Contact Supplier</h2>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('test1', $con);
$sql="SELECT DISTINCT family FROM description";
$result = mysql_query($sql); 
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}?>
<table>
<tr>
<td>Family</td>
<div id="familydiv">
<td><select name="family" id="family" onchange="getDetails(this.value)">
 <option value="" selected="selected"></option>
	<?php while($row=mysql_fetch_array($result))
{ 
echo "<option value=".$row['family'].">".$row['family']."</option>";
} ?>

</select></div></td>
</tr>
<tr>
<td>Brand</td>
 <td><div id="brand"><select name="brand" id="brand">
<option>Brand</option>
 </select></div></td>
</tr>
</table>
<br>
<br>
<div id="txtHint"><b>Supplier info will be listed here.</b></div></td>
</div>
</div>
</div>
</body>
</html>