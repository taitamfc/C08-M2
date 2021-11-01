<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm mới ghi chú</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="index.php?controller=note&action=store">

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Phân loại</label>
                    </div>
                    <div class="col-md-10">
                        <select name="type_id" class="form-select">
                            <?php foreach ($param['items'] as $key => $item) :
                            ?>
                                <?php if ($item->soft_delete == 0) : ?>
                                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                <?php endif ?>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Tiêu đề</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control <?= (isset($_SESSION['errors']['title'])) ? 'is-invalid' : ''; ?>" name="title">
                        <p class="text-danger"><?= (isset($_SESSION['errors']['title'])) ? $_SESSION['errors']['title'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Nội dung</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control <?= (isset($_SESSION['errors']['content'])) ? 'is-invalid' : ''; ?>" name="content" rows="6"></textarea>
                        <p class="text-danger"><?= (isset($_SESSION['errors']['content'])) ? $_SESSION['errors']['content'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Lưu" class="btn btn-primary">
                        <a href="index.php?controller=note&action=list" class="btn btn-secondary">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>