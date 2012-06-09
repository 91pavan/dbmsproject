<?php
echo "<h1>Register</h1>";
?>
<html>
<form action='register.php'>
<table>
	<tr>
		<td>
		Your full name:
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
	</tr>
</table>
<p>
<input type='Submit' value='Register'>
</p>
</html>