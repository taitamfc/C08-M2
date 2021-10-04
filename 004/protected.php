<?php
class Student {
	private 	$email 	= 'a@gmail.com';
	protected 	$name 	= 'Nguyễn Văn A';
	protected 	$age  	= 18;


	//phương thức trả về GTTT name
	protected function getName()
	{
		//truy cập trong lớp
		return $this->name;
	}
	//phương thức trả về GTTT age
	protected function getAge()
	{
		//truy cập trong lớp
		return $this->age;
	}
}

class HocSinh extends Student {
	//hàm khởi tạo ko tham số
	public function __construct(){
		//truy cập trong lớp
		//echo $this->name;

		echo $this->email;
	}
}

//khởi tạo đối tượng
$objHocSinh = new HocSinh();
//$objHocSinh->name;//name đang là protected, và ko thể thực hiện từ bên ngoài

echo '<pre>';
print_r($objHocSinh);
die();

//$objStudent->name; //name đang là protected, và ko thể thực hiện từ bên ngoài

//truy xuất phương thức trả về GTTT name
echo '<br>'.$objStudent->getName();

//truy xuất phương thức trả về GTTT age
echo '<br>'.$objStudent->getAge();

