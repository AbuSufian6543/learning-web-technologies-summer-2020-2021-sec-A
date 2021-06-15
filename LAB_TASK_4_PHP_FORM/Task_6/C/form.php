<?php
	
	$bg = "";
	
	if(isset($_REQUEST['submit'])){
		
		$bg = $_REQUEST['bg'];
		if($bg == ""){
			echo "invalid bg!";
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

		<form method="POST">
			<table>
				<tr>
					<td>Name</td><td>
						<select name="bg">
							<option value="">A+</option>
							<option value="">B+</option>
							<option value="">AB+</option>
							<option value="">O+</option>
						</select>
					</td></tr>
					
					<tr><td colspan ="2">______________________</td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</form>
	
</body>
</html>



