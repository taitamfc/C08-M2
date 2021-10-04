<?php
class Student {

	//thuộc tính của lớp
	public static $classRoom = 'C08';

	//phương thức của lớp
	public static function getClassRoom(){
		$this->name = 'ABC';
		//truy cập trong lớp
		
		//- truy cập vào các thuộc tính và phương thức static thì dùng từ khóa self
		//- từ khóa self chỉ sử dụng được đối với các TT có từ khóa static
		//- ko sử dụng được từ biến $this trong phương thức static
		//- self ko thể đứng cùng $this

		return self::getClassRoom2();
	}

	public function getClassRoom2(){
		return 'getClassRoom2';
	}

	//=========================

	//thuộc tính của đối tượng
	public $name = 'Nguyễn Văn A';
	public $age  = 18;


	//phương thức của đối tượng
	public function getName()
	{
		//truy cập trong lớp
		return $this->name;
	}
}

//truy cập vào thuộc tính của lớp
//echo Student::$classRoom;
echo Student::getClassRoom();


//truy cập vào phương thức của lớp

/*
	1. static dùng để khai báo các PT và TT của LỚP
	2. ko cần khởi tạo đối tượng mà vẫn sử dụng được các PT và TT đó
	3. truy cập vào các thuộc tính và phương thức static thì dùng từ khóa self
	4. ko sử dụng được từ biến $this trong phương thức static
	5. self ko thể đứng cùng $this
*/

