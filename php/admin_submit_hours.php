<?php
	$con = mysqli_connect('localhost', 'jonesep', '', 'tutorScheduler');

	function getClass($val) {
		if($_POST[$val]) {
			$val = 1;
		}else $val = 0;

		return $val;
	}

	//Sunday loop
	for($d=0; $d<7; $d++) {
		switch ($d) {
			case 0:
				$day = 'sun';
				break;
			case 1:
				$day = 'mon';
				break;
			case 2:
				$day = 'tue';
				break;
			case 3:
				$day = 'wed';
				break;
			case 4:
				$day = 'thu';
				break;
			case 5:
				$day = 'fri';
				break;
			case 6:
				$day = 'sat';
				break;
		}

		for($i=7; $i<=23; $i++) {
			if($i < 10) {
				mysqli_query($con, "UPDATE openHours SET h0".$i."=".getClass($day.'0'.$i.'_val')." WHERE day='".$day."'");
			}else {
				 mysqli_query($con, "UPDATE openHours SET h".$i." =".getClass($day.$i.'_val')." WHERE day='".$day."'");
			}
		}
	}

	echo "Open Hours Successfully Set!";
?>