<?php
	class Controller {
		public function renderView(){

		}

		public function redirect(){

		}
	}

	class HomeController extends Controller{

	}

	class NoteDbModel {
		public function find(){
			//NoteDbModel::find
		}

		public function save(){}
	}
	class NoteFileModel {
		public function find(){
			//NoteFileModel::find
		}

		public function save(){}
	}

	//không chính xác
	class NoteModel{
		public function __construct(){

		}
	}

	class NotesController {
		$objNoteModel = new NoteModel();
		$objNoteModel->find();//NoteDbModel::find
	}