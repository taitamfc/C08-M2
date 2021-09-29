<?php
	$books = ['sách văn','lý hóa'];
			//   0           1 2 3 4 5

	$books = [
		0 => 'Sách văn',
		1 => 'Sách hóa',
	];

	$books = [];
	$books[0] = 'Sách văn';
	$books[1] = 'Sách hóa';

	//mảng

	/*
	$books = [
		0 => 'Sách văn',
		1 => 'Sách hóa',
	];
	*/

	//Mảng liên kết
	$user_info = [
		'name' 	=> 'Nguyễn Văn A',
		'age' 	=> 18,
	];

	echo '<pre>';
		print_r($user_info);
	echo '</pre>';

	echo $user_info['name'];//Nguyễn Văn A
	echo '<br>';
	echo $user_info['age'];//18
	echo '<br>';
	//Dùng hàm count để trả về độ dài của mảng
	echo count( $user_info );//2

	$ages = [
		"Peter" => "35", 
		"Ben" 	=> "37", 
		"Joe" 	=> "43"
	];

	echo '<pre>';
		print_r($ages);
	echo '</pre>';



	echo $ages['Ben'];

	echo $ages['Joe'];

	echo '<br>';
	foreach( $ages as $index => $value ){
		//Giá trị lần lượt của index: Peter	, 	Ben, 	Joe
		//Giá trị lần lượt của value: 35	,	37 ,	43

		echo 'Mảng ages tại vị trí '. $index.' có giá trị là: '.$value .' <br>';
		
	}

?>

<script type="text/javascript">
//đối tượng
let user_info = {
    'name': 'Nguyễn Văn A',
    'age': 18,
}
</script>