<?php
class Student {
	private $name = 'Nguyễn Văn A';
	private $age  = 18;


	//phương thức trả về GTTT name
	public function getName()
	{
		//truy cập trong lớp
		return $this->name;
	}
	//phương thức trả về GTTT age
	public function getAge()
	{
		//truy cập trong lớp
		return $this->age;
	}
}

$objStudent = new Student();

//$objStudent->name; //name đang là private, và ko thể thực hiện từ bên ngoài

//truy xuất phương thức trả về GTTT name
echo '<br>'.$objStudent->getName();

//truy xuất phương thức trả về GTTT age
echo '<br>'.$objStudent->getAge();

echo '<pre>';
print_r($objStudent);
die();