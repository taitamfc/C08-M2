<?php
	session_start();
	/*
	if( isset($_REQUEST['id']) ){
		if( !empty( $_REQUEST['id'] ) ){
			$id = $_REQUEST['id'];
		}
	}
	*/

	$id = ( isset($_REQUEST['id']) && !empty( $_REQUEST['id'] ) ) ? $_REQUEST['id'] : 0;
	if( !$id ){
		header("Location: users.php");
		die();
	}

	include_once './classes/User.php';
 	$objUser = new User();
 	$objUser->destroy($id);

 	$_SESSION['alert'] = 'Xóa thành công !';
 	header("Location: users.php");
 	die();
?>