<?php
	//khai báo lớp Student
	class Student {
		//thuộc tính
		public $name 	= 'Nguyễn Văn A';
		public $age 	= 18;
		public $gender 	= '';

		//phương thức chạy chính khi khởi tạo
		public function __construct(){

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
			return $this->age;
		}
	}

	//Khởi tạo đối tượng từ lớp Student => object Student => objStudent
	$objStudent = new Student();

	echo '<pre>';
	print_r($objStudent);
	echo '</pre>';

	//Truy xuất thuộc tính name: . => -> 
	echo '<br> Name - thuộc tính: '.$objStudent->name;

	//Truy xuất thuộc tính age
	echo '<br> Age - thuộc tính: '.$objStudent->age;

	//Truy xuất phương thức trả về giá trị thuộc tính $name
	echo '<br> Name - phương thức: '.$objStudent->getName();

	//Truy xuất phương thức thiết lập giá trị thuộc tính age, làm sao để thuộc tính age có giá trị 19
	$objStudent->setAge(19);
	echo '<br> Age sau khi setAge(19): '.$objStudent->age;

	//thiết lập giá trị thuộc tính gender => 'Nam';
	//Hưng
	$objStudent->gender = 'Nam';

	//Truy xuất thuộc tính gender
	echo '<br> Gender sau khi ->gender = "Nam": '.$objStudent->gender;

	echo '<pre>';
	print_r($objStudent);
	echo '</pre>';

	//Hạnh
	//$objStudent->setGender("Nam");

	//Nhi
	//$objStudent->setGender("Nam");

	//Xuân Cường
	//$objStudent->setGender("Nam");

	//Anh Giang
	//$objStudent->gender = 'Nam';



?>
<script type="text/javascript">

	class Student {
		constructor(ts_name,ts_age,ts_gender){
			this.name 		= ts_name;
			this.age  		= ts_age;
			this.gender  	= ts_gender;
		}

		setName( ts_name ){
			this.name = ts_name;
		}

		getName(){
			return this.name;
		}
	}

	let objStudent = new Student('Nguyễn Văn A',18,'Nam');

	//truy xuất thuộc tính name
	// //X-Cường
	// objStudent.setName();
	// //Hưng
	// console.log( objStudent.setName() );
	// //Nhi
	// objStudent.setName();
	// //Hạnh
	// objStudent.setName();
	//Anh Giang
	objStudent.name;

	//truy xuất phương thức, thiết lập giá trị thuộc tính name
	// //Hưng
	// objStudent.getName();
	// //Hạnh
	// objStudent.getName();
	// //X-Cường
	// objStudent.getName();
	// //Nhi
	// objStudent.getName();
	//Anh Giang
	objStudent.setName('Nguyễn Văn B');

	//truy xuất phương thức trả về giá trị thuộc tính name
	//Nhi
	objStudent.getName()
	//Hưng
	//Ôm cây đợi thỏ
	//X-CƯờng
	objStudent.getName();
	//Hạnh
	objStudent.getName();



</script>