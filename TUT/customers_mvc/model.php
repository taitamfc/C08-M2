<?php
	include_once 'database.php';

	function save_data( $array ){
		echo 'save_data';
		global $connect;

		return 'Model return OK';

		echo '<pre>';
		print_r($connect);
		die();
	}