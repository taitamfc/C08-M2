<?php
	$customers = [
		[
            "ten" 		=> "Mai Văn Hoàn",
            "ngaysinh" 	=> "1983-08-20",
            "diachi" 	=> "Hà Nội",
            "anh" 		=> "images/img1.jpg"
    	],
    	[
            "ten" 		=> "Nguyễn Văn Nam",
            "ngaysinh" 	=> "1983-08-20",
            "diachi" 	=> "Bắc Giang",
            "anh" 		=> "images/img2.jpg"
    	]

	];

?>

<table border="1">
	<tr>
		<th>Tên</th>
		<th>Ngày sinh</th>
		<th>Địa chỉ</th>
		<th>Hình ảnh</th>
	</tr>

	<?php foreach( $customers as $key => $value ): ?>
		<tr>
			<td><?php echo $value['ten']; ?></td>
			<td><?php echo $value['ngaysinh']; ?></td>
			<td><?php echo $value['diachi']; ?></td>
			<td>
				<img src="<?php echo $value['anh']; ?>">
			</td>
		</tr>
	<?php endforeach; ?>


	<?php if( true ): ?>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php endif; ?>


	<?php for( $i = 0; $i < 2; $i++ ): ?>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php endfor; ?>


	<?php while( false ): ?>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php endwhile; ?>
</table>