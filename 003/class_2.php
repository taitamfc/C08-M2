<?php
	//khai báo lớp Student
	class Student {
		//thuộc tính
		public $name 	= '';
		public $age 	= 0;
		public $gender 	= 'Nữ';

		//phương thức chạy chính khi khởi tạo => phương thức khởi tạo
		public function __construct( $ts_name,$ts_age,$ts_gender ){
			// $this->name 		= $ts_name;
			// $this->age  		= $ts_age;
			// $this->gender  		= $ts_gender;

			echo '<br>'.__METHOD__;

			//$this->say();
		}

		//Phương thực tự định nghĩa

		public function say(){
			//echo '<br>'.__METHOD__;
			//echo '<br>Say::hihi';
		}

		//phương thức thiết lập giá trị thuộc tính của name
		public function setName( $ts_name ){
			$this->name = $ts_name;
		}

		//phương thức trả về giá trị thuộc tính name
		public function getName(){
			return $this->name;
		}

		public function setAge( $ts_age ){
			$this->age = $ts_age;
		}

		public function getAge(){
			echo '<br>'.__METHOD__;
			return $this->age;
		}

		public function __destruct(){
			
		}
	}

	$objStudent = new Student('Nguyễn Văn A',18,'Nam');
	$objStudent->say();
	//__construct => tự động chạy đầu tiên

	//gọi phương thức tự định nghĩa
	//$objStudent->getName();

	//__destruct() => tự động chạy sau cùng

	echo '<pre>';
	print_r($objStudent);
	die();

