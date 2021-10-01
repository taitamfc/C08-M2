<?php
class Person{
	//public: mức độ truy cập
	//string: kiểu dữ liệu của thuộc tính
	//$name: tên thuộc tính

	/*
		string
		number ( interger )
		float
		boolean
		array
	*/
	public String 	$name 	= '';
	public float 	$price 	= 0;
	public int 		$age 	= 0;

	public function __construct(){

	}
	//methods
	/*
		public: mức độ truy cập
		getName: tên của phương thức
		: String: kiểu dữ liệu mà nó cần trả về
	*/
	public function getName(): String {
		echo __METHOD__;
		return '';
	}

	public function say(): void{
		echo __METHOD__;
	}
}

$objPerson = new Person();
$objPerson->say();

echo '<pre>';
print_r($objPerson);
die();