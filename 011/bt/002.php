<?php
session_start();

/* Hủy toàn bộ lưu trữ phiên */
//session_destroy();
//die();

$user = [
	'username' => 'Nguyễn Văn A',
	'role' => 'Admin',
];

$_SESSION['user'] = $user;


echo '<pre>';
print_r($_SESSION);
die();



/* 
	
*/