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

	$first_name = '';
	$last_name 	= '';
	//isset(): kiểm tra sự tồn tại của biến:
	//empty(): kiểm tra nó có giá trị hay không

	if( isset( $_GET['first_name'] )  ){
		$first_name = $_GET['first_name'];
	}

	if( isset( $_GET['last_name'] )  ){
		$last_name = $_GET['last_name'];
	}

	if( $first_name != '' && $last_name != '' ){
		echo 'Xin chào '.$last_name.' '.$first_name;
	}

	/*
	request : gửi yêu cầu đi
		- post : ko hiển thị trên url
			$_POST, $_REQUEST
		- get  : hiển thị trên url
			$_GET, $_REQUEST
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="GET">
		Tên:
		<input type="text" name="first_name"> <br>

		Họ
		<input type="text" name="last_name"> <br>

		Ngày sinh
		<input type="date" name="birthday"> <br>

		<button type="submit">Gửi đi</button>
	</form>
</body>
</html>
