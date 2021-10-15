<?php
/*
Parse error: lỗi cú pháp (Syntax Error), missing ; missing ), missing }
	xảy ra tại thời gian biên dịch trong các ngôn ngữ chương trình

Fatal error: undefined function: hàm chưa được định nghĩa sum_1 tại file index.php on dòng 6
	Lỗi trong khi chạy chương trình
=========================================================
Notice: undefined variable: biến chưa được định nghĩa
Warning: failed to open stream: không mở được file
Warning: Division by zero
*/

//error_reporting(0);

/*
try	 : thử
		throw: ném
catch: bắt
finally: cuối cùng
*/

function myDvision($a,$b){
	if( $b == 0 ){
		throw new Exception("B is invalid !");
	}else{
		return $a / $b;
	}
	
}

//catch nó chỉ xuật hiện khi có throw new => Đúng (A) hay Sai (B)
//finally: luôn luôn xuất hiện

try {
	if( file_exists('data.json') ){
		$json_products  = file_get_contents('data.json');
		$products 		= json_decode($json_products);
		foreach ($products as $product) {
			echo '<br>'.$product->name;
		}
	}else{
		myDvision(6,0);
	}
}
catch(Exception $em){
	//nhận lại
	// echo '<pre>';
	// print_r($em);
	// echo '</pre>';

	$str = 'hey bro! There is a error';
	$str .= ' at file <b>'.$em->getFile().'</b>';
	$str .= ' at line <b>'.$em->getLine().'</b>';
	$str .= ' with message <b>'.$em->getMessage().'</b>';

	echo $str;
}
finally{
	echo '<br> finally';
}