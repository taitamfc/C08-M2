<?php
	$findMe = 23;

	//tìm kiếm nhị phân
	$arr = [ 2 , 5 , 8 , 12 , 16 , 23 , 32 , 58 , 72 , 91];//sap xep tu nho den lon
	//       						5    6  

	//Xác định điểm cuối
	$R = count($arr) - 1;//9
	//Xác định điểm đầu
	$L = 0;

	/*======================================*/

	//Xác định giá trị giữa
	$M = floor( ( $R + $L ) / 2 );//4

	//$arr[$M] : 16 vs $findMe: 23

	//Kiểm tra $arr[$M] với $findMe
	if( $arr[$M] > $findMe ){
		//$R = $M - 1;
	}elseif( $arr[$M] < $findMe ){
		//16 < 23
		//
		$L = $M + 1;//5
		/*
		R = 9
		L = 5
		M = (9 + 5) / 2 = 7
		//$arr[$M] : 58 vs $findMe: 23
		*/

		/*
		$arr = [23 , 32 , 58 , 72 , 91];
		//      5    6    7    8    9
		*/

		//Xác định giá trị giữa
		$M = floor( ( $R + $L ) / 2 );//4.5



		if( $arr[$M] > $findMe ){
			//58 > 23
			$R = $M - 1;//6

			/*
			$arr = [23 , 32];
			//      5    6
			*/

			/*
			R = 6
			L = 5
			M = (6 + 5) / 2 = 5
			//$arr[$M] : 23 vs $findMe: 23
			*/

			//Xác định giá trị giữa
			$M = floor( ( $R + $L ) / 2 );//4.5

			if( $arr[$M] > $findMe ){

			}elseif( $arr[$M] < $findMe ){

			}else{ 
				
				echo 'Số cần tìm tại vị trí 5';
			}


		}elseif( $arr[$M] < $findMe ){

		}else { echo 'Số cần tìm'; }


	}else{
		//Tìm ra số
		echo 'Số cần tìm';
	}



?>