<?php 
/*
Abstract class
- 	Trong kế thừa, lớp cha định nghĩa các phương thức chung cho các lớp con
	Một lớp hình học chưa xác định:
		Tính chu vi
		Tính diện tích
	Lớp hình tròn extens
	Để tạo một lớp abstract, dùng từ khóa abstract
	
	Từ khoá abstract được sử dụng để khai báo lớp trừu tượng và phương thức trừu tượng
	Các phương thức trưù tượng không có phần thân

	abstract class là gì ?
	Là một lớp chứa các phương thức trừu tượng

	abstract method là gì ?
	là những phương thức được khai báo nhưng không có phần thân

	//abstract
	1. Không thể tạo đối tượng của lớp abstract
	2. Lớp abstract có thể có các thuộc tính và phương thức bình thường
	3. Một lớp chứa phương thức abstract thì lớp đó phải là abstract
	4. Lớp con (không phải là abstract) kế thừu từ  abstract class thì phải triển khai tất cả các
		phương thức trừu tượng đó5. các phương thức abstract của lớp cha
	6. Một lớp abstract kế thừa từ một lớp cha abstract thì có thể không triển khai các phương thức abstract của lớp cha
	7. Lớp abstract thì không thể là final ( final ko thể đi với abstract )
	8. Phương thức trừu tượng, không thể đi cùng private ( sai: abstract private  )


*/
final 		class UncleB{

}
abstract 	class SaoHoa {
	abstract public function visitSaoHoa();
}

abstract class Geometry extends SaoHoa{
	//thành phần
	//property
	//methods



	private $name = 'Nguyễn Văn A';


	//phương thức có từ khóa abstract thì chính là các phương thức trừu tượng
	//phương thức trừu tượng ko có phần thân

	//Phương trừu tượng thức tính chu vi
	abstract public function getPerimeter();

	//Phương trừu tượng thức tính diện tích
	abstract public function getArea();


	//phương thức bình thường
	function __construct(){
		
	}
	public function getName(){

	}
}
/*
	Khi extends Geometry
	Geometry là một abstract class
	Trong Geometry có 2 phương thức trừu tượng ( 2 abstract methods )
	Bắt buộc lớp con phải viết lại cụ thể ( có phần thân )
*/

class Circle extends Geometry {

	function visitSaoHoa(){
		
	}
	function getPerimeter(){
		echo $this->name;
	}
	function getArea(){
		//body
	}

}


$objCircle = new Circle();

echo '<pre>';
print_r($objCircle);
echo '</pre>';

class Cylinder extends Geometry {
	function visitSaoHoa(){
		//body
	}
	function getPerimeter(){
		//body
	}
	function getArea(){
		//body
	}

	//
	function getVolume(){

	}

}

class Square extends Geometry {
	function visitSaoHoa(){
		//body
	}
	function getPerimeter(){
		//body
	}
	function getArea(){
		//body
	}
}