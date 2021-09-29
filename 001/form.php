<?php  
	/*
		Post: Dữ liệu ko hiển thị trên URL
		Get: Dữ liệu sẽ được gửi đi qua URL
	*/

	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';
	
	/*	
		[
			username => ?
			password => ?
		]
	*/

	
	//Chỉ xử lý nghiệp vụ khi mà người dùng gửi đi
	//Kiểm tra người dùng đã gửi dữ liệu hay chưa: Phương thức POST
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	
		//gán biến
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		//kiểm tra, nếu username có giá trị rỗng thì gán nội dung vào biến error_username
		if( $username == '' ){
			echo 'Vui lòng nhập tài khoản <br>';
		}

		//kiểm tra, nếu username có giá trị rỗng thì gán nội dung vào biến error_password
		if( $password == '' ){
			echo 'Vui lòng nhập mật khẩu <br>';
		}

		//chỉ thực hiện tính toán khi và chỉ khi 2 giá trị phía trên là đã được nhập
		if( $username != '' && $password != '' ){
			//Truy vấn CSDL
			//Xử lý...

			echo 'Chào mừng '. $username.' !';
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="POST">
		<h3 style="text-align:center;"> <?php echo $wellcome; ?> </h3>
		<table>
			<tr>
				<td> Username </td>
				<td>  
					<input type="text" name="username"> 
				</td>
			</tr>
			<tr>
				<td> Password </td>
				<td>  
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td colspan="2"> 
					<button type="submit">Login</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>