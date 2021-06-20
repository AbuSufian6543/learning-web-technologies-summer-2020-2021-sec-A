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