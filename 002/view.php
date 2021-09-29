<?php
	require './data.php';
?>

<?php echo 'Chạy đi chờ chi !';?>
<table border="1">
	<tr>
		<th>Tên</th>
		<th>Tuổi</th>
	</tr>
	<?php 
		foreach ($users as $key => $value){
			// echo '<pre>';
			// print_r($value);
			// die();//dừng chương trình lại
			/*
				[
					'name' 	: 'Nguyễn Văn A',
					'age'	: 18	
				]
			*/
			echo '<tr>';
				echo '<td>'. $value['name'] .'</td>';
				echo '<td>'. $value['age'] .'</td>';
			echo '</tr>';

		}
	?>
</table>