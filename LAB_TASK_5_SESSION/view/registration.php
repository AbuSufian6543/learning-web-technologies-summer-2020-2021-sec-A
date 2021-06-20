<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<div>
	<form method="post" action="../controller/signupCheck.php">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr><legend>Gender</legend>
					<td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td><td></td></tr>
				</tr>
				
				<tr><legend>Date of Birth</legend><td>
						
				    dd </td><td>
						
				    mm</td><td>
						
				    yyyy </td>
					</td></tr>
					<tr><td>
						
					<input type="date" name="dob"></td>
					</td></tr>
				<tr>
					<td>Type</td>
					
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Signup"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>