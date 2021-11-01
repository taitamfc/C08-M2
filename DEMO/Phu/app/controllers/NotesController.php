<?php

namespace app\controllers;

include "app/models/Note.php";
include "app/models/TypeNote.php";
include "app/controllers/Controller.php";

use app\models\Note;
use app\models\TypeNote;
use app\controllers\Controllers;

class NotesController extends Controllers
{
    public function index()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();
        $types = $typeNoteModle->getAll();

        $noteModel = new Note();
        $total_records = $noteModel->count();

        $limit  = 5;
        $total_page = ceil($total_records / $limit);

        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        if ($page > 1) {
            $pre = $page - 1;
        } else {
            $pre = 1;
        }
        if ($page < $total_page) {
            $next = $page + 1;
        } else {
            $next = $total_page;
        }

        $offset = ($page - 1) * $limit;

        $items = $noteModel->paginate($offset, $limit);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'types' => $types,
            'pre' => $pre,
            'next' => $next,
        ];
        $this->renderView("/notes/list.php", $param);
    }

    public function create()
    {
        $typeNoteModle = new TypeNote();
        $items = $typeNoteModle->getAll();
        $param = [
            'items' => $items,
        ];
        $this->renderView("/notes/create.php", $param);
    }

    public function store()
    {
        $required_fields = [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung'
        ];
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $type_id = $_POST['type_id'];

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
            }

            if (count($errors) == 0) {
                $noteModel = new Note();
                $noteModel->store($title, $content, $type_id);
                $_SESSION['flash_message'] = "Thêm mới thành công";
                $this->redirect('index.php?controller=note&action=list');
            } else {
                $_SESSION['errors'] = $errors;
                $this->redirect('index.php?controller=note&action=create');
            }
        }
    }

    public function edit()
    {
        $typeNoteModle = new TypeNote();
        $items = $typeNoteModle->getAll();

        $id = $_GET['id'];
        $noteModel = new Note();
        $old_item = $noteModel->getOne($id);
        $param = ['items' => $items, 'old_item' => $old_item];
        $this->renderView("/notes/edit.php", $param);
    }

    public function update()
    {
        $required_fields = [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung'
        ];
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $type_id = $_POST['type_id'];
            $id = $_GET['id'];

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
            }

            if (count($errors) == 0) {
                $noteModel = new Note();
                $noteModel->update($id, $title, $content, $type_id);
                $_SESSION['flash_message'] = "Chỉnh sửa thành công";
                $this->redirect('index.php?controller=note&action=list');
            } else {
                $_SESSION['errors'] = $errors;
                $this->redirect('index.php?controller=note&action=edit&id=' . $id);
            }
        }
    }

    public function show()
    {
        $id = $_GET['id'];
        $noteModel = new Note();
        $item = $noteModel->getOne($id);
        $param = ['item' => $item];
        $this->renderView("/notes/show.php", $param);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $noteModel = new Note();
        $noteModel->delete($id);
        $_SESSION['flash_message'] = "Xóa thành công";
        $this->redirect('index.php?controller=note&action=list');
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $type_id = $_POST['type_id'];
            $noteModel = new Note();
            if ($search == '' && $type_id != '') {
                $items = $noteModel->search_type($type_id);
                $typeNoteModle = new TypeNote();
                $old_item_type = $typeNoteModle->getOne($type_id);
            } else if ($search != '' && $type_id == '') {
                $items = $noteModel->search_title($search);
            }

            if ($search != '' && $type_id != '') {
                $items = $noteModel->search_2($search, $type_id);
                $typeNoteModle = new TypeNote();
                $old_item_type = $typeNoteModle->getOne($type_id);
            }

            if ($items == null) {
                $error = "Không tìm thấy kết quả nào";
            } else {
                $error = '';
            }

            $typeNoteModle = new TypeNote();
            $types = $typeNoteModle->getAll();

            $param = ['types' => $types, 'items' => $items, 'error' => $error, 'old_item_type' => $old_item_type, 'search' => $search];
            $this->renderView("/notes/search.php", $param);

            if ($search == '' && $type_id == '') {
                $this->redirect('index.php?controller=note&action=list');
            }
        }
    }

    public function sort_asc()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();
        $types = $typeNoteModle->getAll();

        $noteModel = new Note();
        $total_records = $noteModel->count();

        $limit  = 5;
        $total_page = ceil($total_records / $limit);

        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        if ($page > 1) {
            $pre = $page - 1;
        } else {
            $pre = 1;
        }
        if ($page < $total_page) {
            $next = $page + 1;
        } else {
            $next = $total_page;
        }

        $offset = ($page - 1) * $limit;

        $column = $_GET['column'];

        $items = $noteModel->sort_asc($offset, $limit, $column);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'types' => $types,
            'pre' => $pre,
            'next' => $next,
            'column' => $column
        ];
        $this->renderView("/notes/sortAsc.php", $param);
    }

    public function sort_desc()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();
        $types = $typeNoteModle->getAll();

        $noteModel = new Note();
        $total_records = $noteModel->count();

        $limit  = 5;
        $total_page = ceil($total_records / $limit);

        $page = isset($_GET['page']) ? $_GET['page'] : 1;


        if ($page > 1) {
            $pre = $page - 1;
        } else {
            $pre = 1;
        }
        if ($page < $total_page) {
            $next = $page + 1;
        } else {
            $next = $total_page;
        }

        $offset = ($page - 1) * $limit;

        $column = $_GET['column'];

        $items = $noteModel->sort_desc($offset, $limit, $column);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'types' => $types,
            'pre' => $pre,
            'next' => $next,
            'column' => $column
        ];
        $this->renderView("/notes/sortDesc.php", $param);
    }

    public function redirect($url)
    {
?>
        <script>
            let url = '<?= $url; ?>';
            window.location.href = url;
        </script>
<?php
    }
}
