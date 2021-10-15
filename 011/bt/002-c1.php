<?php
session_start();
session_destroy();die();

$orgin_numbers = [];
for( $i = 1; $i <= 10; $i++ ){
	$orgin_numbers[] = $i;
}

$the_numbers = $orgin_numbers;

/*
Mảng	: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
Chỉ số	:  0  1  2  3  4  5  6  7  8  9 
*/

$L = 0;
$R = count($orgin_numbers) - 1;//9
$M = floor( ( $R + $L ) / 2 ) ;//9 + 0 / 2 = 4.5 => 4

$guest_number = $orgin_numbers[$M];

$question = 'Có phải là số '.$guest_number.' hay không ?';



if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	$answer = $_REQUEST['answer'];

	//lần trả lời 2 trở đi
	if( isset( $_SESSION['orgin_numbers'] ) ){
		$orgin_numbers 	= $_SESSION['orgin_numbers'];
		$L 				= $_SESSION['L'];//5
		$R 				= $_SESSION['R'];//9
		$M 				= floor( ( $R + $L ) / 2 ) ;
	}

	switch ($answer) {
		case 'greater':
		/*
		Mảng	: [6, 7, 8, 9, 10]
		Chỉ số	:  5  6  7  8  9 
		*/
			$L = $M + 1;

			$orgin_numbers = [];
			for ($i = $L; $i <= $R ; $i++) { 
				$orgin_numbers[$i] = $the_numbers[$i];
			}

			$_SESSION['orgin_numbers'] 	= $orgin_numbers;
			$_SESSION['L'] 			= $L;//5
			$_SESSION['R'] 			= $R;//9

			break;
		case 'lower':
			/*
				Mảng	: [1, 2, 3, 4]
				Chỉ số	:  0  1  2  3 
			*/
			$R = $M - 1;
			$orgin_numbers = [];
			for ($i = $L; $i <= $R ; $i++) { 
				$orgin_numbers[$i] = $the_numbers[$i];
			}

			$_SESSION['orgin_numbers'] 	= $orgin_numbers;
			$_SESSION['L'] 			= $L;//0
			$_SESSION['R'] 			= $R;//3	

			break;
		default:
			$question = 'Trò chơi kết thúc !';
			unset($_SESSION['orgin_numbers']);
			break;
	}

	//In ra câu đoán
	if( isset( $_SESSION['orgin_numbers'] ) ){
		$orgin_numbers 	= $_SESSION['orgin_numbers'];
		$L 				= $_SESSION['L'];//5
		$R 				= $_SESSION['R'];//9
		$M 				= floor( ( $R + $L ) / 2 ) ;
		$guest_number = $the_numbers[$M];
		$question = 'Có phải là số '.$guest_number.' hay không ?';
	}
}

echo '<pre>';
print_r($orgin_numbers);
echo '</pre>';


?>
<form action="" method="POST">
	<p><?= $question; ?></p>
	<p>
		<select name="answer">
			<option value="greater">Lớn hơn</option>
			<option value="lower">Thấp hơn</option>
			<option value="equal">Bằng</option>
		</select>
	</p>
	<p>
		<button type="submit">Đoán</button>
	</p>
</form>
