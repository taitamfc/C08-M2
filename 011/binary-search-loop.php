<?php
	$findMe = 58;

	//tìm kiếm nhị phân
	$arr = [ 2 , 5 , 8 , 12 , 16 , 23 , 32 , 58 , 72 , 91];//sap xep tu nho den lon
	//       0   1   2    3    4    5    6    7    8    9

	//Xác định điểm cuối
	$R = count($arr) - 1;

	//Xác định điểm đầu
	$L = 0;

	

	while( $L <= $M ){
		//Xác định giá trị giữa
		$M = floor( ( $R + $L ) / 2 ) ;//4
		//Kiểm tra $arr[$M] với $findMe
		if( $arr[$M] > $findMe ){
			$R = $M - 1;
		}elseif( $arr[$M] < $findMe ){
			$L = $M + 1;//5
		}else{
			echo 'Giá trị tìm thấy tại '.$M;
		}
	}
?>