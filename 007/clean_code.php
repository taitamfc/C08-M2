<?php
//underscore
$so_thu_nhat = 1;

//camelcase
$soThuNhat 	= 1;
$soThuHai 	= 2;
$tongHaiSo	= $soThuNhat + $soThuHai;

//
class QuanLySanPham {

}

class User {
	public $id 			= 0;
	public $lastName 	= '';
	public $firstName 	= '';
	public $gender 		= '';
	public $age 		= '';
	public $birthDay 	= '';
	public $adress		= '';
	public $status		= '';

	//add new
	public function addUser(){
		//validate


		//lưu vào CSDL -> json
		$this->save( $data );

		//alert
	}

	//save into database
	public function save(){
		//lưu vào CSDL
	}

	//sửa

	//xóa
}

$objUser = new User();

//thiết lập giá trị các thuộc tính
$objUser->firstName = 'Nguyễn';
$objUser->lastName 	= 'Văn A';
$objUser->gender 	= 'male';
$objUser->age 		= 18;
$objUser->birthDay 	= '7/10/1991';
$objUser->adress 	= 'Đông Hà';
$objUser->status 	= true;

$objUser->save();



class Product{
	//list

	//add

	//edit

	//delete
}