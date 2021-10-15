<?php
class ProductsController{
	public function index(){
		$objModel = new NoteModel();
		$items = $objModel->getAll;
		include_once './views/index.php';
	}
	public function add(){
		
		include_once './views/add.php';
	}

	public function edit(){
		
		include_once './views/edit.php';
	}
}