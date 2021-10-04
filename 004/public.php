<?php
class Student {
	public $name = 'Nguyễn Văn A';
	public $age  = 18;

	public function getName()
	{
		//truy cập trong lớp
		return $this->name;
	}
}

$objStudent = new Student();

//truy xuất thuộc tính name
echo $objStudent->name;

echo '<pre>';
print_r($objStudent);
die();