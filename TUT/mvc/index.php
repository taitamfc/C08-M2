<?php
	//index.php?controller=notes&page=edit
	//index.php?controller=products&page=edit

	//notes/edit => notes -> edit

	$controller = ( isset( $_GET['controller'] ) ) ? $_GET['controller'] : 'home';
	switch ($controller) {
		case 'products':
			include_once './models/ProductModel.php';
			include_once './controllers/ProductsController.php';
			$objController = new ProductsController();
			break;
		case 'notes':
			include_once './models/NoteModel.php';
			include_once './controllers/NotesController.php';
			$objController = new NotesController();
			break;
		default:
			// code...
			break;
	}


	$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 'index';
	switch ($page) {
		case 'index':
			$objController->index();
			break;
		case 'add':
			$objController->add();
			break;
		case 'edit':
			$objController->edit();
			break;
		default:
			// code...
			break;
	}