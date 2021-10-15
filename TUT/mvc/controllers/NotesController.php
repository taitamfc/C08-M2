<?php

class NotesController{
	public function index(){
		$objModel = new NoteModel();
		$items = $objModel->getAll;
		include_once './views/notes/index.blade.php';
	}
	public function add(){
		
		include_once './views/notes/add.blade.php';
	}

	public function edit(){
		
		include_once './views/notes/edit.blade.php';
	}
}