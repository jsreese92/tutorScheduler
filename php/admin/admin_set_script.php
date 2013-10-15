<?php
	$con = mysqli_connect("127.10.98.130","adminR4Im6WI","V16hdDRZ_SGr");

	// Set database
	$sql="use tutorScheduler";
	if (mysqli_query($con,$sql)){
  		echo "Database set successfully \r\n";
	}
	else {
 		echo "Error setting database: " . mysqli_error($con);
	}	

	function getClass($val) {
		if($_POST[$val]) {
			$val = 1;
		}else $val = 0;
		return $val;
	}

	//Sunday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('sun0'.$i.'_val')." WHERE day='sun'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('sun'.$i.'_val')." WHERE day='sun'");
	}
	//Monday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('mon0'.$i.'_val')." WHERE day='mon'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('mon'.$i.'_val')." WHERE day='mon'");
	}
	//Tuesday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('tue0'.$i.'_val')." WHERE day='tue'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('tue'.$i.'_val')." WHERE day='tue'");
	}
	//Wednesday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('wed0'.$i.'_val')." WHERE day='wed'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('wed'.$i.'_val')." WHERE day='wed'");
	}
	//Thursdayday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('thu0'.$i.'_val')." WHERE day='thu'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('thu'.$i.'_val')." WHERE day='thu'");
	}
	//Friday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('fri0'.$i.'_val')." WHERE day='fri'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('fri'.$i.'_val')." WHERE day='fri'");
	}
	//Saturday loop
	for($i=7; $i<=23; $i++) {
		if($i < 10) {
			mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass('sat0'.$i.'_val')." WHERE day='sat'");
		}else mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass('sat'.$i.'_val')." WHERE day='sat'");
	}

	echo "Open Hours Successfully Set!";
?>