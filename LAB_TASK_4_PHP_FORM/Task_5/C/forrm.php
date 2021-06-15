<?php
	
	$degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$degree = $_REQUEST['degree'];
		if($degree == ""){
			echo "invalid degree!";
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
		<legend>Degree</legend>

		<form method="POST" >
			<table>
				
					<tr><td>
						<input type="checkbox" name="degree" value=""> SSC
						<input type="checkbox" name="degree" value=""> HSC
						<input type="checkbox" name="degree" value=""> BSc
					</td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</form>
		
		</fieldset>
	
</body>
</html>



