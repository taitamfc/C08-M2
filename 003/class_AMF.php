<?php
	//khai báo lớp Student
	/*
	public: mức độ truy cập công khai
	private: chỉ có bạn bè 
	protected: bảo vệ

	private vs protected
	- không cho truy cập trực tiếp
	- cần phải thông qua phương thức nào đó trả về GTTT đó



	*/

	class Family {
		protected 	$tai_san_1 = 'Xe ô tô';
		protected 	$tai_san_2 = 'Nhà 2 tầng';

		public function lay_xe(){
			return $this->tai_san_1;
		}
	}

	$objFamily = new Family();

	//kẻ trộm
	//echo '<br>'. $objFamily->tai_san_1;
	//echo '<br>'. $objFamily->lay_xe();


	class Randy extends Family{

		public function lay_xe(){
			return $this->tai_san_1;
		}
	}
	$objRandy = new Randy();
	echo 'Randy lấy xe: '.$objRandy->lay_xe();

	echo '<pre>';
	print_r($objRandy);
	die();


	
	class Facebook {
		public 	$post_1 = 'Mình mới nấu bánh nè';
		private $post_2 = 'Ảnh 16plus kỷ yếu';

		public function showAsFriend(){
			return $this->post_2;
		}
	}


	//facebookers
	$objFacebook = new Facebook();

	//xem bài post 1
	echo '<br>'. $objFacebook->post_1;

	//xem chùa bài post 2 => không thể xem được
	//echo '<br>'. $objFacebook->post_2;

	//xem dưới tư cách bạn bè
	echo '<br>'. $objFacebook->showAsFriend();



	// echo '<pre>';
	// print_r($objFacebook);
	// die();