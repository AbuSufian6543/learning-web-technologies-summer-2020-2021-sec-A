<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>


<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>

<form method="post" action="../controller/edit profile.php">
<fieldset>
<table>
<tr><td> XCompanyLogo</td><td>
	<tr>
						<h1>Welcome home! <?=$_SESSION['user']['username']?> </h1>
	                    <a href="logout.php">logout</a>
					</tr>
					<td> Wecome Bob </td>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
	
	<tr><td raw span ="2"> Copyright @ 2017</td></tr>
	</table>
	</fieldset>
		</form>
</body>
</html>







<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home! <?=$_SESSION['user']['username']?> </h1>
	<a href="logout.php">logout</a>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>