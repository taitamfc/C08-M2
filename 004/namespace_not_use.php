<?php
	include_once './DongHa/Cuong.php'; //class Cuong
	include_once './GioLinh/Cuong.php';//class Cuong


	$objCuong_DongHa 	= new DongHa\Cuong();
	$objCuong_GioLinh 	= new GioLinh\Cuong();

	//visit_giolinh
	echo $objCuong_GioLinh->visit_giolinh();

	echo "<br>";

	//visit_dongha
	echo $objCuong_DongHa->visit_dongha();