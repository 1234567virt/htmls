<?php

	date_default_timezone_set('Europe/Moscow');
	$p1=date('H');
	switch($p1){
		case 1:
			$val=' час';
			break;
		case 2:
			$val=' час';
			break;
		case 3:
			$val='часа';
			break;
		case 22:
			$val=' часа';
			break;
		case 4:
			$val=' часа';
			break;
		case 21:
		$val='час';
		break;
		case 23:
		$val='часа';
		break;
		default:
			$val=' часов';
			break;
		}

	$s1=date('i');
	switch($s1){
		case 1:
			$min=' минута';
			break;
		case 2:
			$min='минуты';
			break;
		case 3:
			$min='минуты';
			break;
		case 4:
			$min=' минуты';
			break;
		default:
			$min=' минут';
			break;
		}
		echo $p1.$val.":".$s1.$min;
?>