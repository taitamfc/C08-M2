<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$age 	= 18; //kiểu số
		$price	= 20.05; //kiểu float
		$name 	= 'Nguyễn Văn A';//kiểu chuỗi
		$status = true; //kiểu boolean
		$check 	= null; //kiểu null
		$books	= ['Sách văn','Sách toán','Sách lý'];
		$cars	= array("Volvo","BMW","Toyota");


		//echo => in ra biến
		echo $name;

		echo '<hr>';

		//var_dump => in ra biến hoặc mảng kèm kiểu dữ liệu
		//var_dump($books);

		echo '<hr>';

		//print_r();

		echo '<pre>';
		print_r($books); //in ra biến hoặc mảng, ko kèm kiểu dữ liệu
		echo '</pre>';

		echo '<hr>';
		echo $books[0];

		echo '<hr>';
		/*
		>: lớn hơn
		<: bé hơn
		<=: bé hơn hoặc bằng
		>=: lớn hơn hoặc bằng
		==: so sánh bằng giá trị
		===: so sánh bằng giá trị + kiểu dữ liệu
		*/
		if( $age > $price ){
			
		}

		//thực hiện kết hợp chuỗi với biến
		echo 'Tên của bạn là: ' . $name .'. Và tuổi của bạn là '.$age;
		//Tên của bạn là: Nguyễn Văn A. Và tuổi của bạn là 18; 

		echo '<hr>';
		$a = 5;
		$b = 6;
		$a = $a + $b;
		$a += $b; //11

		$first_name = 'Nguyễn';
		$last_name = 'Văn A';
		//$full_name = $first_name .' '. $last_name; // Nguyễn Văn A

		$full_name = '';
		$full_name = $full_name.$first_name;//Nguyễn
		$full_name = $full_name.' '.$last_name//Nguyễn Văn A

		$full_name = '';
		$full_name .= $first_name;//Nguyễn
		$full_name .= ' '.$last_name;//Nguyễn Văn A

	?>

	<script type="text/javascript">
		let age 	= 18;
		let price 	= 20.05;
		let name 	= 'Nguyễn Văn A';
		let a = 5;
		let b = 6;

		a += b;//a = a + b => 11




		//xuất
		document.write( 'Tên của bạn là: ' + name );//Tên của bạn là: Nguyễn Văn A

		//console.log(name);
	</script>
</body>
</html>