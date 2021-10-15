<?php
	function show_answer($ts_answer){
		return 'Câu trả lời của bạn là: '.$ts_answer;
	}

	//Contrller
	$error 			= '';
	$the_answer 		= '';
	if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		$your_answer = $_REQUEST['answer'];
		if( $your_answer == '' ){
			$error = 'Vui lòng chọn câu trả lời';
		}else{
			//Model
			$the_answer = show_answer($your_answer);
		}
	}

?>
<!-- VIEW -->
<style type="text/css">
	.text-error {
		color: red;
	}
</style>
<form action="" method="POST">
	<p><?= $the_answer; ?></p>
	<p>
		<select name="answer">
			<option value="">Chọn câu trả lời</option>
			<option value="greater">Lớn hơn</option>
			<option value="lower">Thấp hơn</option>
			<option value="equal">Bằng</option>
		</select>
		<p class="text-error"><?= $error; ?></p>
	</p>
	<p>
		<button type="submit">Đoán</button>
	</p>
</form>


