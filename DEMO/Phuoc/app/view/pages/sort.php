<p style="font-size:50px" class="text-center">Các ghi chú</p>
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
                    <div class="row">
                        <div class="col-2">
                            STT
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=id&sort_type=ASC">Cũ <i class="fas fa-arrow-right"></i> Mới</a></li>
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=id&sort_type=DESC">Mới <i class="fas fa-arrow-right"></i> Cũ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col">
                    <div class="row">
                        <div class="col-5">
                            Tiêu đề
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=title&sort_type=ASC">A <i class="fas fa-arrow-right"></i> Z</a></li>
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=title&sort_type=DESC">Z <i class="fas fa-arrow-right"></i> A</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col">
                    <div class="row">
                        <div class="col-5">
                            Phân loại
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=name&sort_type=ASC">A <i class="fas fa-arrow-right"></i> Z</a></li>
                                    <li><a class="dropdown-item" href="index.php?controller=Home&action=sort&col_sort=name&sort_type=DESC">Z <i class="fas fa-arrow-right"></i> A</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col">
                    <div class="row">
                        <div class="col-5">
                            Hành động
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                            </div>
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['notes'] as $key => $note) : ?>
                <tr>
                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $note->title ?></td>
                    <td>
                        <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4"><?= $note->name ?></button>
                    </td>
                    <td>
                        <a href="index.php?controller=Home&action=view&note_id=<?= $note->id ?>" class="btn btn-success"><i class="far fa-eye"></i></a>
                        <a href="index.php?controller=Home&action=edit&note_id=<?= $note->id ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                        <a href="index.php?controller=Home&action=delete&note_id=<?= $note->id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="space-between"></div>
    <div style="float: right">
        <nav aria-label="Page navigation example">
            <div class="block-27">
                <ul>
                    <li>
                        <?php if ($params['page'] > 1) : ?>
                            <a href="index.php?controller=Home&action=sort&col_sort=<?= $params['col_sort']; ?>&sort_type=<?= $params['sort_type']; ?>&page=<?= $params['page'] - 1  ?>">&lt;</a>
                        <?php else : ?>
                            <span>&lt;</span>
                        <?php endif; ?>
                    </li>
                    <?php for ($i = 1; $i <= $params['pages']; $i++) : ?>
                        <li><a href="index.php?controller=Home&action=sort&col_sort=<?= $params['col_sort']; ?>&sort_type=<?= $params['sort_type']; ?>&page=<?= $i ?>"><?= $i ?></a></li>
                    <?php endfor; ?>
                    <li>
                        <?php if ($params['page'] < $params['pages']) : ?>
                            <a href="index.php?controller=Home&action=sort&col_sort=<?= $params['col_sort']; ?>&sort_type=<?= $params['sort_type']; ?>&page=<?= $params['page'] + 1  ?>">&gt;</a>
                        <?php else : ?>
                            <span>&gt;</span>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="space-between"></div>
</div>