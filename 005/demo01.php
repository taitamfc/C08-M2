<?php
//Lớp cha
final class UncleB {

}

class UncleChildB extends UncleB {

}
die();
class ParentA {
	protected $name 	= 'Ba mẹ';
	protected $age 		= 80;
	private   $email 	= 'test@gmail.com';	
	public    $birthday = '20/20/2000';	

	//hàm khởi tạo ko tham số
	public function __construct(){
		echo '<br>'.__METHOD__;//ParentA::__construct
	}
	public final function nha_2_tang(){
		echo '<br> Bố mẹ có nhà 2 tầng';
	}

	private function xe_vinfast(){
		echo '<br>'.__METHOD__;//ParentA::xe_vinfast
	}
}
/*
extends
private > protected > public

public  private, protected
*/
//Lớp con kế thừa từ lớp cha
class ChildA extends ParentA{
	public function __construct(){
		// parent::__construct();
		// echo '<br>'.__METHOD__;//ChildA::__construct
	}
	public function showInfo(){
		$info 	= '';
		$info 	.= '<br> Tên: '.$this->name;
		$info 	.= '<br> Tuổi: '.$this->age;
		$info 	.= '<br> Ngày sinh: '.$this->birthday;
		$info 	.= '<br> Email: '.$this->email;
		echo $info;
	}
	public function xe_vinfast(){
		echo '<br>'.__METHOD__;//ChildA::xe_vinfast
	}

	//ghi đè phương thức ParentA:nha_2_tang
	// public function nha_2_tang(  ){
	// 	parent::nha_2_tang();
	// 	echo '<br> Con cái có nhà 2 tầng';
		
	// }

	public function read_book(){
		//gọi phương thức xe_vinfast:
		//xe_vinfast: của lớp hiện tại hay lớp cha ?
		//Lựa chọn 1: lớp hiện tại
		//Lựa chọn 2: lớp Cha
		//$this->xe_vinfast();
	}
	
}
//Lớp con kế thừa từ lớp cha
class ChildB extends ParentA{
	
}


//$objParentA = new ParentA();

$objChildA = new ChildA();
//$objChildA->showInfo();
$objChildA->xe_vinfast();
die();

$objChildA->read_book();


$objChildB = new ChildB();

//truy xuất thuộc tính name
//$objParentA->name;

echo "<pre>";
// print_r($objParentA);
// print_r($objChildA);
// print_r($objChildB);
die();

/*
	this:
		đại điện cho lớp hiện tại, gọi các thuộc tính và phương thức trong lớp
		this: sử dụng trong lớp hiện tại	
	parent:
		muốn thực hiện lại chức năng mà lớp cha đang thực hiện	
		parent: sử dụng để gọi các phương thức và thuộc tính của lớp cha
*/