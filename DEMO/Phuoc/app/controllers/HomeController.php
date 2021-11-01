<?php

namespace Controllers;

include_once 'app/models/NoteManagerment.php';
include_once 'app/models/NoteType.php';

use Models\NoteManagerment;
use Models\NoteType;


class HomeController
{
    public $url_controller = 'index.php?controller=Home';
    public function test()
    {
        // 
    }
    public function index()
    {
        $objNoteType = new NoteType();
        $objNote = new NoteManagerment();
        $limit = 5;
        $types = $objNoteType->getAll();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $notes = $objNote->getAll($start, $limit);
        $pages = $objNote->pagination($limit, 'note');
        $params = [
            "notes" => $notes,
            "types" => $types,
            "pages" => $pages,
            "page" => $page,
        ];
        $objNote->renderView('home.php', $params);
    }
    public function sort()
    {
        $col_sort = $_GET['col_sort'];
        $sort_type = $_GET['sort_type'];
        $objNoteType = new NoteType();
        $objNote = new NoteManagerment();
        $limit = 6;
        $types = $objNoteType->getAll();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $notes = $objNote->getAllSort($start, $limit, $col_sort, $sort_type);
        $pages = $objNote->pagination($limit, 'note');
        $next = $page + 1;
        $pre = $page - 1;
        $params = [
            "notes" => $notes,
            "types" => $types,
            "pages" => $pages,
            "page" => $page,
            "col_sort" => $col_sort,
            "sort_type" => $sort_type
        ];
        $objNote->renderView('sort.php', $params);
    }
    public function view()
    {
        $note_id = $_GET['note_id'];
        $objNote = new NoteManagerment();
        $note = $objNote->getOne($note_id);
        include 'app/view/pages/view.php';
    }
    public function create()
    {
        $objNoteType = new NoteType();
        $objNote = new NoteManagerment();
        $types = $objNoteType->getAll();
        $required_fields = [
            'title' => 'tiêu đề',
            'type_id' => 'loại',
            'content' => 'nội dung'
        ];
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $type_id = $_POST["type_id"];
            $content = $_POST["content"];
            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = 'Vui lòng nhập ' . $label;
                }
            }
            if (count($errors) == 0) {
                $objNote->store($title, $type_id, $content);
                $objNote->redirect($this->url_controller . '&action=index');
            }
        }
        $params = [
            "types" => $types,
            "errors" => $errors
        ];
        $objNote->renderView('create-note.php', $params);
    }
    public function edit()
    {
        $note_id = $_GET['note_id'];
        $objNoteType = new NoteType();
        $objNote = new NoteManagerment();
        $types = $objNoteType->getAll();
        $note = $objNote->getOne($note_id);
        $required_fields = [
            'title' => 'tiêu đề',
            'type_id' => 'loại',
            'content' => 'nội dung'
        ];
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $type_id = $_POST["type_id"];
            $content = $_POST["content"];
            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = 'Vui lòng nhập ' . $label;
                }
            }
            if (count($errors) == 0) {
                $objNote->update($title, $type_id, $content, $note_id);
                $objNote->redirect($this->url_controller . '&action=index');
            }
        }
        $params = [
            "types" => $types,
            "note" => $note,
            "errors" => $errors
        ];
        $objNote->renderView('edit.php', $params);
    }
    public function delete()
    {
        $note_id = $_GET['note_id'];
        $objNote = new NoteManagerment();
        $objNote->delete($note_id);
        $objNote->redirect($this->url_controller . '&action=index');
    }
    public function seach()
    {
        $title = $_GET['title'];
        $objNoteType = new NoteType();
        $objNote = new NoteManagerment();
        $types = $objNoteType->getAll();
        if ($_GET['type_id'] != 0) {
            $type_id = $_GET['type_id'];
            $result = $objNote->seachWithType($type_id, $title);
        } else {
            $result = $objNote->seach($title);
        }
        $params = [
            "types" => $types,
            "result" => $result,
            "title" => $title
        ];
        $objNote->renderView('seach.php', $params);
    }
}
