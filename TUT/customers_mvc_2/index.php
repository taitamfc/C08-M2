<?php
	include_once './controllers/CustomerController.php';
	$objCustomerController = new CustomerController();

	$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : '';


	/*
	create
	edit
	index
	delete
	*/
	switch ($page) {
		case 'index':
			$objCustomerController->index();
			break;
		case 'create':
			$objCustomerController->create();
			break;
		case 'edit':
			$objCustomerController->edit();
			break;
		case 'delete':
			$objCustomerController->delete();
			break;
		
		default:
			# code...
			break;
	}
	