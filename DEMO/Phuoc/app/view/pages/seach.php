<p style="font-size:50px" class="text-center">Các kết quả tìm kiếm cho : <?= $params['title'] ?></p>
<div class="space-between"></div>
<div class="container" style="width:1000px">
    <form method="GET">
        <div class="row">
            <div class="col-2">
                <select name="type_id" class="form-select" aria-label="Default select example">
                    <option value="0" selected>Thể loại</option>
                    <?php foreach ($params['types'] as $key => $type) : ?>
                        <option value="<?= $type->id ?>"><?= $type->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-10">
                <div class="input-group mb-3">
                    <input type="hidden" name="controller" value="Home">
                    <input type="hidden" name="action" value="seach">
                    <input type="text" class="form-control" placeholder="Tiêu đề ..." name="title">
                    <button class="btn mb-2 mb-md-0 btn-success btn-sm btn-round mr-3" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <div class="space-between"></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    STT
                </th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Phân loại</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['result'] as $key => $note) : ?>
                <tr>
                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $note->title ?></td>
                    <td>
                        <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4"><?= $note->name ?></button>
                    </td>
                    <td>
                        <a href="index.php?controller=Home&action=edit&note_id=<?= $note->id ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                        <a href="index.php?controller=Home&action=delete&note_id=<?= $note->id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($params['result'])) : ?>
                <tr>
                    <td colspan="4" style="color:red" class="text-center">Không có kết quả phù hợp</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>