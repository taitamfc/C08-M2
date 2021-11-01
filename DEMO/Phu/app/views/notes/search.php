<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5">Các ghi chú</h1>
        <div class="col-md-8">
            <a href="index.php?controller=note&action=create" class="btn btn-success mt-5" style="width: 100%">Thêm mới</a>
            <form method="POST" action="index.php?controller=note&action=search">
                <div class="row mt-2">
                    <div class="col-md-2">
                        <select class="form-select" name="type_id">
                            <option value="<?= $param['old_item_type']->id ?>"><?= $param['old_item_type']->name ?></option>
                            <?php foreach ($param['types'] as $type) : ?>
                                <?php if ($type->soft_delete == 0 && $type->id != $param['old_item_type']->id) : ?>
                                    <option value="<?= $type->id ?>"><?= $type->name ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-9">
                        <input class="form-control" type="text" placeholder="Tiêu đề" name="search" value="<?= $param['search'] ?>">

                    </div>
                    <div class="col-1">
                        <button type="submit" class="form-control btn btn-success"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Phân loại</th>
                            <th>Tác vụ</th>
                        </tr>
                        <?php foreach ($param['items'] as $key => $item) :   ?>
                            <tr>
                                <td>
                                    <?= ++$key; ?>
                                </td>
                                <td>
                                    <?= $item->title ?>
                                </td>
                                <td>
                                    <?= $item->name ?>
                                </td>
                                <td>
                                    <a href="index.php?controller=note&action=show&id=<?= $item->id ?>"><i class="far fa-eye fa-lg text-primary"></i></a>
                                    <a href="index.php?controller=note&action=edit&id=<?= $item->id ?>"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                    <a href="index.php?controller=note&action=delete&id=<?= $item->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ko ?')"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <h4 class="text-center"><?= (isset($param['error'])) ? $param['error'] : ''; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>