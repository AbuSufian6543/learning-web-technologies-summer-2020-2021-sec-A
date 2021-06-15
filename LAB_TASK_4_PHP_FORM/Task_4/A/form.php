<?php
	
	$gender = "";
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "invalid gender!";
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
<fieldset>
		<legend>Gender</legend>

		<form method="POST" >
			<table>
				
					<tr><td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</form>
		
		</fieldset>
	
</body>
</html>


