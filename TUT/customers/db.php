<?php
$username = 'root';
$password = '';
$connect  = new PDO('mysql:host=localhost;dbname=demo', 
			$username, $password
		);

/*
//Lấy tất cả dữ liệu
$sql = 'SELECT * FROM students';
//thực hiện truy vấn
$stmt  = $connect->query( $sql );

//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//lấy tất cả kết quả
$rows   = $stmt->fetchAll();

echo '<pre>';
print_r($rows);
die();
*/

