<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5">Các loại ghi chú</h1>
        <div class="col-md-8">
            <form method="POST" action="index.php?controller=type_note&action=search">
                <div class="row mt-5 justify-content-end">
                    <div class="col-md-2">
                        <a href="index.php?controller=type_note&action=create" class="btn btn-success" style="width: 100%">Thêm mới</a>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Tên" name="search" value="<?= $param['search'] ?>">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Tìm kiếm" class="form-control btn btn-success">
                    </div>
                </div>
            </form>

            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>
                        </tr>
                        <?php foreach ($param['items'] as $key => $item) :  ?>
                            <?php if ($item->soft_delete == null) : ?>
                                <tr>
                                    <td>
                                        <?= ++$key ?>
                                    </td>
                                    <td>
                                        <?= $item->name ?>
                                    </td>
                                    <td>
                                        <?= $item->description ?>
                                    </td>
                                    <td>
                                        <a href="index.php?controller=type_note&action=edit&id=<?= $item->id ?>"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                        <a href="index.php?controller=type_note&action=delete&id=<?= $item->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ko ?')"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </table>
                    <h4 class="text-center"><?= (isset($param['error'])) ? $param['error'] : ''; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>