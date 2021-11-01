<?php

namespace app\controllers;

include "app/models/TypeNote.php";
include "app/controllers/Controller.php";

use app\models\TypeNote;
use app\controllers\Controllers;

class TypeNotesController extends Controllers
{
    public function index()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();
        $total_records = $typeNoteModle->count();

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

        $items = $typeNoteModle->paginate($offset, $limit);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'pre' => $pre,
            'next' => $next,
        ];
        $this->renderView("/type-notes/list.php", $param);
    }

    public function create()
    {
        $this->renderView("/type-notes/create.php");
    }

    public function store()
    {
        $required_fields = [
            'name' => 'Tên',
            'description' => 'Mô tả'
        ];
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
            }

            if (count($errors) == 0) {
                $typeNoteModle = new TypeNote();
                $typeNoteModle->store($name, $description);
                $_SESSION['flash_message'] = "Thêm mới thành công";
                $this->redirect('index.php?controller=type_note&action=list');
            } else {
                $_SESSION['errors'] = $errors;
                $this->redirect('index.php?controller=type_note&action=create');
            }
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $typeNoteModle = new TypeNote();
        $item = $typeNoteModle->getOne($id);
        $param = ['item' => $item];
        $this->renderView("/type-notes/edit.php", $param);
    }

    public function update()
    {
        $required_fields = [
            'name' => 'Tên',
            'description' => 'Mô tả'
        ];
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $description = $_POST['description'];

            foreach ($required_fields as $field => $label) {
                if ($_POST[$field] == '') {
                    $errors[$field] = "Vui lòng nhập " . $label;
                }
            }
            $id = $_GET['id'];

            if (count($errors) == 0) {
                $noteModel = new TypeNote();
                $noteModel->update($name, $description, $id);
                $_SESSION['flash_message'] = "Chỉnh sửa thành công";
                $this->redirect('index.php?controller=type_note&action=list');
            } else {
                $_SESSION['errors'] = $errors;
                $this->redirect('index.php?controller=type_note&action=edit&id=' . $id);
            }
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $typeNoteModle = new TypeNote();
        $typeNoteModle->delete($id);
        $_SESSION['flash_message'] = "Xóa thành công";
        $this->redirect('index.php?controller=type_note&action=list');
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];

            $noteModel = new TypeNote();
            $items = $noteModel->search($search);

            if ($items == null) {
                $error = "Không tìm thấy kết quả nào";
            } else {
                $error = '';
            }
            $param = [
                'items' => $items,
                'error' => $error,
                'search' => $search
            ];
            $this->renderView("/type-notes/search.php", $param);
        }
    }

    public function sort_asc()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();

        $total_records = $typeNoteModle->count();

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

        $items = $typeNoteModle->sort_asc($offset, $limit, $column);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'pre' => $pre,
            'next' => $next,
            'column' => $column
        ];
        $this->renderView("/type-notes/sortAsc.php", $param);
    }

    public function sort_desc()
    {
        unset($_SESSION['errors']);
        $typeNoteModle = new TypeNote();
        $total_records = $typeNoteModle->count();

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

        $items = $typeNoteModle->sort_desc($offset, $limit, $column);

        $param = [
            'items' => $items,
            'total_page' => $total_page,
            'pre' => $pre,
            'next' => $next,
            'column' => $column
        ];
        $this->renderView("/type-notes/sortDesc.php", $param);
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
