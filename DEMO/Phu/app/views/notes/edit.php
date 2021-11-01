<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm mới ghi chú</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="index.php?controller=note&action=update&id=<?= $param['old_item']->id ?>">

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Phân loại</label>
                    </div>
                    <div class="col-md-10">
                        <select name="type_id" class="form-select">
                            <option value="<?= $param['old_item']->type_id  ?>"><?= $param['old_item']->name ?></option>
                            <?php foreach ($param['items'] as $key => $item) :
                            ?>
                                <?php if ($item->soft_delete == 0 && $item->id != $param['old_item']->type_id) : ?>
                                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                <?php endif ?>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Tiêu đề</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="<?= $param['old_item']->title ?>">
                        <p class="text-danger"><?= (isset($_SESSION['errors']['title'])) ? $_SESSION['errors']['title'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Nội dung</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="content" rows="6"><?= $param['old_item']->content ?></textarea>
                        <p class="text-danger"><?= (isset($_SESSION['errors']['content'])) ? $_SESSION['errors']['content'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Sửa" class="btn btn-primary">
                        <a href="index.php?controller=note&action=list" class="btn btn-secondary">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>