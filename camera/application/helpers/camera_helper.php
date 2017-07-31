<?php
function camera_name($id) {
	return "Bashu";
}
function nice_time($time = FALSE) {
	if(!$time)
		return "FALSE";
	else {
		$split = str_split($time);
		$hour = $split[0]*10 + $split[1];
		$minute = $split[2]*10 + $split[3];
		if($hour > 11) {
			$hour = ($hour == 12) ? $hour : $hour - 12;
			$attr = 'PM';
		} else {
			$attr = 'AM';
		}
		return sprintf('%02d',$hour).':'.sprintf('%02d',$minute).' '.$attr;
	}
}
function extract_data($data) {
	$data = explode(',', $data);
	if($data[sizeof($data) - 1] == ',')
		array_pop($data);
	return $data;
}
?>