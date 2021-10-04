<?php
	include_once './DongHa/Cuong.php'; //class Cuong
	include_once './GioLinh/Cuong.php';//class Cuong

	/*
	use TEN_NAMESPACE\TEN_LOP;
	*/
	use DongHa\Cuong;
	use GioLinh\Cuong as Cuong_GioLinh;

	// //visit_giolinh
	$objCuong_GioLinh = new Cuong_GioLinh();
	echo $objCuong_GioLinh->visit_giolinh();

	echo "<br>";

	//visit_dongha
	$objCuong = new Cuong();
	echo $objCuong->visit_dongha();

