

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
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
$rating=strip_tags($_POST['rating']);
$URL=strip_tags($_POST['URL']);
$fax=strip_tags($_POST['fax']);
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
				mysql_select_db('test');
				
				$query=mysql_query("INSERT INTO supplier (name,username,password,address,phone,rating,URL,fax) VALUES ('$fullname','$username','$password','$address','$phoneno','$rating','$URL','$fax')") or die(mysql_error());
				
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
<html>
<div class="error">
<h1>Register Supplier</h1>
<form action='supplier_add.php' method='POST'>
<table>
	<tr>
		<td>
		Supplier full name:
		</td>
		<td>
		<input type='text' name='fullname'>
		</td>
	</tr>
	<tr>
		<td>
		Choose username:
		</td>
		<td>
		<input type='text' name='username'>
		</td>
	</tr>
	
	<tr>
		<td>
		Enter password:
		</td>
		<td>
		<input type='password' name='password'>
		</td>
	</tr>
	<tr>
		<td>
		Renter password:
		</td>
		<td>
		<input type='password' name='password1'>
		</td>
		<td>
	</tr>
	<tr>
		<td>
		Phone:
		</td>
		<td>
		<input type='text' name='phone'>
		</td>
	</tr>
	<tr>
		<td>
		URL:
		</td>
		<td>
		<input type='text' name='URL'>
		</td>
	</tr>
	<tr>
		<td>
		Rating:
		</td>
		<td>
		<input type='text' name='rating'>
		</td>
	</tr>
	<tr>
		<td>
		Address:
		</td>
		<td>
		<input type='text' name='address'>
		</td>
	</tr>
	<tr>
		<td>
		FAX:
		</td>
		<td>
		<input type='text' name='fax'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit' onclick='aa()'>
</p>
</div>
</div>
</html>