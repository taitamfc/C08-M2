<?php
//30
//đăng nhập hệ thống - 30p để làm việc
//đăng nhập vào vietcombank
session_start();
//session_destroy();

//lưu trữ vào session
$_SESSION['ho_va_ten'] 	= 'Nguyễn Văn A'; 
$_SESSION['tuoi'] 		= 18; 
$_SESSION['status'] 	= true; 


echo '<pre>';
print_r($_SESSION);
die();