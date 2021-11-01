<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm mới loại ghi chú</h1>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="index.php?controller=type_note&action=store">

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Tên</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control <?= (isset($_SESSION['errors']['name'])) ? 'is-invalid' : ''; ?>" name="name">
                        <p class="text-danger"><?= (isset($_SESSION['errors']['name'])) ? $_SESSION['errors']['name'] : ''; ?></p>
                    </div>
                </div>

                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Mô tả</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control <?= (isset($_SESSION['errors']['description'])) ? 'is-invalid' : ''; ?>" name="description" rows="3"></textarea>
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