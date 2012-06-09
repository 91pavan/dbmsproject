<html>
<head>

<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test1');
$query="SELECT * FROM supplier WHERE username='$username'";
$result=mysql_query($query) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows!=0)
{
while($row=mysql_fetch_array($result))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];

}
//check to see if they match
if($username==$dbusername&&$password==$dbpassword)
{
echo "Welcome supplier<br>";
$_SESSION['username1']=$dbusername;
echo "You are in !  <a href='supplier_member.php'>Click</a> here to go the member page";
$query1=mysql_query("SELECT id from supplier WHERE username='$username'");
$numrows1=mysql_num_rows($query1) or die(mysql_error());
if($numrows1!=0)
{
while($row1=mysql_fetch_array($query1))
{
$sid=$row1['id'];
$_SESSION['sid']=$sid;

}
}
}
else
{
echo "Incorrect password";
}


}
else
{
$query="SELECT * FROM superuser WHERE username='$username'";
$result=mysql_query($query) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows!=0)
{
while($row=mysql_fetch_array($result))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];

}
//check to see if they match
if($username==$dbusername&&$password==$dbpassword)
{
echo "Welcome Superuser!!   ";
$_SESSION['username2']=$dbusername;
echo "You are in! <a href='superuser_member.php'>Click</a> here to go the member page";
}
else
{
echo "Incorrect password";
}
}
}
}
else
{
die("Please enter all the details!");
}
?>
</div>
</html>