<?php
class Student {
	public function __construct(){
		echo '<br>'.__METHOD__;
	}

	public function showInfo_1(){
		echo '<br>'.__METHOD__;
	}
	public function showInfo_2(){
		echo '<br>'.__METHOD__;
	}

	public function __destruct(){
		echo '<br>'.__METHOD__;
	}
}

$objStudent = new Student();
$objStudent->showInfo_1();
$objStudent->showInfo_2();

echo '<hr>';
echo '<pre>';
print_r($objStudent);
die();