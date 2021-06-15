<?php
	
	$email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];
		if($email == ""){
			echo "invalid email!";
		}
	}else{
		echo 'invalid request';
	}
?>



<html>
<head>
	<title>HTML Form Tag</title>
</head>
<body>

		<form method="POST" >
			<table>
				<tr>
					<td>Email</td></tr>
					
					<tr><td><input type="email" name="email" value="<?php echo $email; ?>" placeholder="type email"></td>
				</tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</form>
	
</body>
</html>