<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm mới loại ghi chú</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="index.php?controller=type_note&action=update&id=<?= $param['item']->id ?>">
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Tên</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="<?= $param['item']->name ?>">
                        <p class="text-danger"><?= (isset($_SESSION['errors']['name'])) ? $_SESSION['errors']['name'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Mô tả</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="description" rows="6"><?= $param['item']->description ?></textarea>
                        <p class="text-danger"><?= (isset($_SESSION['errors']['description'])) ? $_SESSION['errors']['description'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Lưu" class="btn btn-primary">
                        <a href="index.php?controller=type_note&action=list" class="btn btn-secondary">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>