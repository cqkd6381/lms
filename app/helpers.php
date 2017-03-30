<?php
function change_time($time){
	$h = floor($time/60);
	$m = $time%60;
	if($h==0){
		return $m.'分';
	}
	return $h.'小时'.$m.'分'; 
}
