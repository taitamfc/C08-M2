<?php
	
	abstract class Geometry {

		//tính chu vi
		abstract public function getPerimeter();

		//tính diện tích
		abstract public function getArea();
	}

	class Cylinder extends Geometry {
		function getPerimeter(){
			//body
		}
		function getArea(){
			//body
		}
	}

	//hình tròn kế thừa từ một lớp hình học
	class Circle extends Geometry {
		//tính chu vi
		function getPerimeter(){
			//body
		}

		//tính diện tích
		function getArea(){
			//body
		}
	}