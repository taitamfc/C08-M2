<?php
include_once './model.php';
$alert = '';
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

	// echo '<pre>';
	// print_r($_REQUEST);
	// die();

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if( $username == '' ||  $password == '' ){
		$alert = 'Vui lòng nhập đầy đủ thông tin';
	}else{
		$controller_get = save_data( $_REQUEST );

		$alert = 'Lưu thành công';
	}
}

include_once './view.php';