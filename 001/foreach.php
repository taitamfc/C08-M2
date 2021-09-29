<?php
$books	= ['Sách văn','Sách toán','Sách lý'];
//			0           1            2

/*
echo 'Phần tử vị trí thứ 0 có giá trị là Sách văn <br>';
echo 'Phần tử vị trí thứ 1 có giá trị là Sách toán <br>';
echo 'Phần tử vị trí thứ 2 có giá trị là Sách lý <br>';
*/

foreach ($books as $index => $value) {
	//$index: 0 1 2
	//$value: 'Sách văn' 'Sách toán' 'Sách lý'

	echo 'Phần tử vị trí thứ '. $index .' có giá trị là '. $value .' <br>';
	
}
//count($books): 3 - 1 = 2 => 0 1 2
for( $i = 0; $i < count($books) - 1; $i++ ){
	echo 'Phần tử vị trí thứ '. $i .' có giá trị là '. $books[$i] .' <br>';
}