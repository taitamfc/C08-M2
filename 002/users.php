<?php
$filename = 'users.json';
//lấy nội dung file
$users = file_get_contents($filename);

//nếu file rỗng thì cho biến $users thành mảng rỗng
if( $users == '' ){
	$users = [];
}else{
	//json.parse
	//chuyển từ chuỗi json sang mảng, tham số thứ 2 là có muốn thành mảng hay ko
	$users = json_decode($users, true );
}

// echo '<pre>';
// print_r($users);
// echo '</pre>';

?>

<table border="1">
	<tr>
		<th>Tên</th>
		<th>Email</th>
		<th>Ngày sinh</th>
		<th>Địa chỉ</th>
		<th>Giới tính</th>
	</tr>

	<?php foreach( $users as $key => $value ): 
		
		if( $value['gender'] == 'male' ){
			$gender = 'Nam';
		}else{
			$gender = 'Nữ';
		}
		?>
		<tr>
			<td><?php echo $value['last_name']; ?> <?php echo $value['first_name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td>
				<?php echo $value['ngay']; ?>/<?php echo $value['thang']; ?>/<?php echo $value['nam']; ?>
			</td>
			<td><?php echo $value['last_name']; ?></td>
			<td><?php echo $gender; ?></td>
		</tr>
	<?php endforeach; ?>
</table>