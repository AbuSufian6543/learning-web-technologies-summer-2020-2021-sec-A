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