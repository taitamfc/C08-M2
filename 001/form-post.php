<?php
	//$_REQUEST: nhận dữ liệu từ client truyền đi
	//Mảng bất tuần tự
	/*
		$products = ['Sản phẩm A',20000];
				//  0            1

		echo $products[0];//'Sản phẩm A'

		$products = [
			'name' 	=> 'Sản phẩm A',
			'price' => 20000
		];

		echo $products['name'];//'Sản phẩm A'
	*/


	
	echo '<pre>';
		print_r($_REQUEST); //in ra biến hoặc mảng, ko kèm kiểu dữ liệu
	echo '</pre>';

	echo $_REQUEST['first_name'] 	.'<br>';
	echo $_REQUEST['last_name'] 	.'<br>';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="POST">
		Tên:
		<input type="text" name="first_name"> <br>

		Họ
		<input type="text" name="last_name"> <br>

		<button type="submit">Gửi đi</button>
	</form>
</body>
</html>
