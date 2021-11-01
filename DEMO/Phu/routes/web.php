<?php

use app\controllers\NotesController;
use app\controllers\TypeNotesController;

$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    include "app/controllers/NotesController.php";
    $obj_Note = new NotesController();
    $obj_Note->index();
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


if ($controller == 'note') {
    include "app/controllers/NotesController.php";
    $obj_Note = new NotesController();
    if ($action == 'list') {
        $obj_Note->index();
    }
    if ($action == 'create') {
        $obj_Note->create();
    }
    if ($action == 'store') {
        $obj_Note->store();
    }
    if ($action == 'edit') {
        $obj_Note->edit();
    }
    if ($action == 'update') {
        $obj_Note->update();
    }
    if ($action == 'show') {
        $obj_Note->show();
    }
    if ($action == 'delete') {
        $obj_Note->delete();
    }
    if ($action == 'search') {
        $obj_Note->search();
    }
    if ($action == 'sort_asc') {
        $obj_Note->sort_asc();
    }
    if ($action == 'sort_desc') {
        $obj_Note->sort_desc();
    }
}

if ($controller == 'type_note') {
    include "app/controllers/TypeNotesController.php";
    $obj_TypeNote = new TypeNotesController();
    if ($action == 'list') {
        $obj_TypeNote->index();
    }
    if ($action == 'create') {
        $obj_TypeNote->create();
    }
    if ($action == 'store') {
        $obj_TypeNote->store();
    }
    if ($action == 'edit') {
        $obj_TypeNote->edit();
    }
    if ($action == 'update') {
        $obj_TypeNote->update();
    }
    if ($action == 'delete') {
        $obj_TypeNote->delete();
    }
    if ($action == 'search') {
        $obj_TypeNote->search();
    }
    if ($action == 'sort_asc') {
        $obj_TypeNote->sort_asc();
    }
    if ($action == 'sort_desc') {
        $obj_TypeNote->sort_desc();
    }
}
