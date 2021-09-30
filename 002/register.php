<?php
	$errors = [];
	$thong_bao = '';
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		//In ra các giá trị gửi lên

		// echo '<pre>';
		// print_r($_REQUEST);
		// echo '</pre>';
		//die();//Dừng chương trình

		$last_name 	= $_REQUEST['last_name'];
		$first_name = $_REQUEST['first_name'];
		$email 		= $_REQUEST['email'];
		$password 	= $_REQUEST['password'];
		$ngay 		= $_REQUEST['ngay'];
		$thang 		= $_REQUEST['thang'];
		$nam 		= $_REQUEST['nam'];
		$gender 	= $_REQUEST['gender'];

		$can_do 	= true;
		$errors 	= [];

		if( $last_name == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập họ';
		}

		if( $first_name == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập tên';
		}

		if( $email == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập email';
		}

		if( $password == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập password';
		}

		if( $ngay == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập ngày';
		}

		if( $thang == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập tháng';
		}

		if( $nam == '' ){
			$can_do = false;
			$errors[] = 'Vui lòng nhập năm';
		}

		// echo '<pre>';
		// print_r($errors);
		// echo '</pre>';

		if( $can_do ){
			$user = $_REQUEST;

			$filename = 'users.json';

			$users = file_get_contents($filename);
			if( $users == '' ){
				$users = [];
			}else{
				//json.parse
				//chuyển từ chuỗi json sang mảng, tham số thứ 2 là có muốn thành mảng hay ko
				$users = json_decode($users, true );
			}

			//array_push
			$users[] = $user;

			//chuyển từ mảng sang json
			$data = json_encode($users); //Json.stringfy

			//lưu nội dung vào 1 file có tên là users.json và dữ liệu là data
			file_put_contents($filename,$data);

			$thong_bao = 'Lưu thành công';
		}

	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		input, select,button {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		label {
			font-weight: bold;
			display: block;
			margin-bottom: 5px;
		}
		.errors {
			text-align: center;
			color: red;
		}
	</style>
</head>
<body>
	<div>
		<h3 style="text-align:center;">Đăng ký</h3>
	</div>
	
	<form action="" method="POST">

		<?php 
		echo '<h3 style="text-align:center;">' . $thong_bao . '</h3>';
		if( count($errors) > 0 ){
			//echo '<div style="text-align:center;">';
			echo '<ul class="errors">';
			foreach( $errors as $key => $error ){
				echo '<li>'. $error .'</li>';
			}
			echo '</ul>';
			//echo '</div>';
		}
		?>

		<table style="margin:0px auto; width: 600px;">
			<tr>
				<td>
					<input type="text" name="last_name" placeholder="Họ">
				</td>
				<td>
					<input type="text" name="first_name" placeholder="Tên">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="email" placeholder="Email">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="password" name="password" placeholder="Mật khẩu">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table style="width: 100%;">
						<tr>
							<td>
								<label>Ngày</label>
								<select name="ngay">
									<option value="">Vui lòng chọn</option>
									<?php for( $i = 1; $i <= 31; $i++ ): ?>
										<option value="<?php echo $i; ?>">Ngày <?php echo $i; ?></option>
									<?php endfor; ?>
								</select>
							</td>
							<td>
								<label>Tháng</label>
								<select name="thang">
									<option value="">Vui lòng chọn</option>
									<?php for( $i = 1; $i <= 12; $i++ ): ?>
										<option value="<?php echo $i; ?>">Tháng <?php echo $i; ?></option>
									<?php endfor; ?>
								</select>
							</td>
							<td>
								<label>Năm</label>
								<select name="nam">
									<?php for( $i = 1990; $i <= 2007; $i++ ): ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php endfor; ?>
								</select>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label>Giới Tính</label>
					<table>
						<tr>
							<td>Nữ</td>
							<td><input type="radio" name="gender" value="female"></td>
							<td>Nam</td>
							<td> <input type="radio" name="gender" value="male" checked></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Bằng cách nhấp vào Đăng ký, bạn đồng ý với Điều khoản, Chính sách dữ liệu và Chính sách cookie của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit">Đăng ký</button>
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>