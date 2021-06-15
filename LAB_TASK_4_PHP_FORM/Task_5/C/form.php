<?php
	
	$DOB = "";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['DOB'];
		if($DOB == ""){
			echo "invalid DOB!";
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
		<legend>Date of Birth</legend>

		<form method="POST" >
			<table>
				    <tr><td>
						
				    dd </td><td>
						
				    mm</td><td>
						
				    yyyy </td>
					</td></tr>
					<tr><td>
						
					<input type="date" name="dob"></td>
					</td></tr>
					<tr><td>_____________________________</td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</form>
		
		</fieldset>
	
</body>
</html>