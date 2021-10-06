<?php
	/*
	Interface là gì ?
	Interface (không phải là lớp) là một cấu trúc tương tự như lớp, 
	nhưng chỉ chứa các hằng số và abstract method

	Khai báo: dùng từ khóa interface để khai báo

	interface INTERFACE_NAME

	- không thể khởi tạo đối tượng từ interface
	- không thể chứa các phương thức bình thường ( không phải là abstract )
	- Khi một lớp triển khai interface thì cần triển khai tất cả các phương thức được khai báo trong interface đó
	- Interface có thể được thiết kế để khai báo các phương thức chung cho các lớp không liên quan với nhau
	- Các phương thức trong interface là các phương thức trừu tượng ( không cần từ khóa abstract)
	- interface có thể kế thừa từ một interface khác qua từ khóa extends ( không được dùng từ khóa implements )
	

	- khi chúng ta muốn bổ sung tính năng của đối tượng
	- Xe hơi bổ sung chức bay lượn
	- Xe hơi bổ sung chức năng chạy trên nước

	- quan hệ is-a (cha con , thừa kế) thì dùng abstract class
	- quan hệ can-do ( bổ sung ) dùng interface
	*/

	interface SaoHoa{

	}
	interface Boating extends SaoHoa{

		//Phương thức trừu tượng
		function swim();
	}

	interface Bird {
		//Hằng số
		const ORIENTATION_LEFT 	= 1;
		const ORIENTATION_RIGHT = 2;
		const ORIENTATION_UP 	= 3;
		const ORIENTATION_DOWN 	= 4;

		//Phương thức trừu tượng
		public function fly();

		//Phương thức trừu tượng
		public function sing();
	}

	// Hiển thị thuộc tính hằng giá trị
	

	//lớp Car triển khai từ interface Bird và interface Bird
	class Car implements Bird {
		public function fly(){

		}
		public function sing(){

		}
		public function swim(){

		}
	}

	class Vinfast extends Car implements Bird{

	}

	$objVinfast = new Vinfast();
	$objVinfast->fly();
	echo '<pre>';
	print_r($objVinfast);
	echo '</pre>';