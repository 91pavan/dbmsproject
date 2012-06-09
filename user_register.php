<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
//form data
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$submit=strip_tags($_POST['Submit']);
$fullname=strip_tags($_POST['fullname']);
$username=strip_tags($_POST['username']);
$password=strip_tags($_POST['password']);
$password1=strip_tags($_POST['password1']);
$phoneno=strip_tags($_POST['phoneno']);
$address=strip_tags($_POST['address']);
if($submit)
{
if($username && $fullname && $password && $password1)
{
	if($password==$password1)
	{
		if(strlen($username)>25||strlen($fullname)>25)
		{
			echo "Length of username or fullname is too long!";
		}
		else
		{
			if(strlen($password)>24|| strlen($password)<6)
			{
				echo "Password must be between 6 and 25 characters!";
			}
			else
			{
				if(strlen($phoneno)>15)
				{
				echo "Phone number is too long!";
				}
				else
				{
				//register the user!
				
				
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('test1');
				
				$query=mysql_query("INSERT INTO user (id,username,password,name,pno,address) VALUES ('','$username','$password','$fullname','$phoneno','$address')");
				
				die("You have been registered! <a href='index.html'>Click</a>here to go out main page");
				}
			}
		}
	}
	else
		echo "Password don't match";
}
else
{
echo "Please fill <b>ALL</b> the details before registering";
}
}
?>
</html>
