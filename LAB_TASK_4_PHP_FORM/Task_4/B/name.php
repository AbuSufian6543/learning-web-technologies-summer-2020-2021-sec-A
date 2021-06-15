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
