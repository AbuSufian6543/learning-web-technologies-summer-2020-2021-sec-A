<?php
	
	$degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$degree = $_REQUEST['DOB'];
		if($degree == ""){
			echo "invalid degree!";
		}
	}else{
		echo 'invalid request';
	}
?>