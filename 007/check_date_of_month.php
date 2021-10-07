<?php
	$month = 'Tháng 2';

	const THANG_MOT = 'Tháng 1';
	const THANG_HAI = 'Tháng 2';
	const THANG_BA 	= 'Tháng 3';
	const THANG_TU 	= 'Tháng 4';

	switch ($month) {
		case THANG_HAI:
			echo 'Có 28 ngày';
			break;
		case THANG_BA:
			echo 'Có 31 ngày';
			break;
		case THANG_TU:
			echo 'Có 30 ngày';
			break;
		default:
			echo 'Không xác định';
			break;
	}

	echo '<hr>';

	switch ($month) {
		case THANG_MOT:
		case THANG_HAI:
		case THANG_BA:
			echo 'Mùa xuân';
			break;
		case THANG_TU:
			echo 'Mùa hè';
			break;
		default:
			echo 'Không xác định';
			break;
	}
