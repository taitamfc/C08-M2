<p style="font-size:50px" class="text-center">Thêm ghi chú</p>

<div class="space-between"></div>
<div class="container" style="width:800px">
    <form method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control <?= (isset($params['errors']['title'])) ? 'is-invalid' : '' ?>" id="title" name="title">
            <div id="emailHelp" class="form-text" style="color:red"><?= (isset($params['errors']['title'])) ? $params['errors']['title'] : ''; ?></div>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Loại</label>
            <select name="type_id" id="type_id" class="form-select <?= (isset($params['errors']['type_id'])) ? 'is-invalid' : '' ?>">
                <option value="" selected>Chọn loại</option>
                <?php foreach ($params['types'] as $key => $type) : ?>
                    <option value="<?= $type->id ?>"><?= $type->name ?></option>
                <?php endforeach; ?>
            </select>
            <div class="form-text" style="color:red"><?= (isset($params['errors']['type_id'])) ? $params['errors']['type_id'] : ''; ?></div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea rows="10" cols="50" class="form-control <?= (isset($params['errors']['content'])) ? 'is-invalid' : '' ?>" name="content" id="content"></textarea>
            <div class="form-text" style="color:red"><?= (isset($params['errors']['content'])) ? $params['errors']['content'] : ''; ?></div>
        </div>
        <button type="submit" class="btn mb-2 mb-md-0 btn-success btn-sm btn-round mr-3">Lưu</button>
        <a href="index.php?controller=Home&action=index" class="btn mb-2 mb-md-0 btn-danger btn-sm btn-round mr-3">Hủy</a>
    </form>
</div>