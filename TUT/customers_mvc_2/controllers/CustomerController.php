<?php
	include_once './models/Customer.php';
	class CustomerController {
		//read
		public function index(){
			include_once './views/customers/index.php';
		}

		//create
		public function create(){
			$alert = '';
			if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

				$username = $_REQUEST['username'];
				$password = $_REQUEST['password'];

				if( $username == '' ||  $password == '' ){
					$alert = 'Vui lòng nhập đầy đủ thông tin';
				}else{
					$objModel = new Customer();
					$objModel->save();
					$alert = 'Lưu thành công';
				}
			}

			include_once './views/customers/create.php';
		}

		//update
		public function edit(){
			include_once './views/customers/edit.php';
		}

		//delete
		public function delete(){
			include_once './views/customers/delete.php';
		}
	}