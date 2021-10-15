<?php
/* 
	Xử lý post từ form
	$string_numbers = '0911222333,0931222333,0971222333';
	$numbers 		= explode(',',$string_numbers);	
	
	$vina 		= '091';
	$mobi 		= '093';
	$viettel_1 	= '097';
	$viettel_2 	= '098';
	
	

	$numbers = [
		'0911222333',
		'0941222333',
		'0931222333',
		'0971222333',
		'0981222333',
	];
	

	$number_vinas 		= [];
	$number_mobis 		= [];
	$number_viettels 	= [];
	//Duyệt mảng
		$number = '0911222333';//091

		//https://www.php.net/manual/en/function.substr.php
		$number 	= '0911222333';//091
		$so_dau 	= substr($number,0,3);//091
		$number_vinas[] = $number;




	Duyệt mảng $numbers

*/
	session_start();
	echo '<pre>';
print_r($_SESSION);
die();
