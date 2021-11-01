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
                        <input class="form-control" type="text" placeholder="Tên" name="search">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Tìm kiếm" class="form-control btn btn-success">
                    </div>
                </div>
            </form>

            <div class="row mt-5">
                <div class="col-md-12">
                    <?php if (isset($_SESSION['flash_message'])) : ?>
                        <?php $message = $_SESSION['flash_message']; ?>
                        <?php unset($_SESSION['flash_message']); ?>
                        <div class="alert alert-success"><i class="fas fa-check"></i> <?= $message ?></div>
                    <?php endif; ?>
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>STT
                                <a href="index.php?controller=type_note&action=sort_desc&column=id">
                                    <i class="fa fa-fw fa-sort-down text-secondary"></i>
                                </a>
                            </th>
                            <th>Tên
                                <a href="index.php?controller=type_note&action=sort_desc&column=name">
                                    <i class="fa fa-fw fa-sort-down text-secondary"> </i>
                                </a>
                            </th>
                            <th>Mô tả
                                <a href="index.php?controller=type_note&action=sort_desc&column=description">
                                    <i class="fa fa-fw fa-sort-down text-secondary"></i>
                                </a>
                            </th>
                            <th>Tác vụ</th>
                        </tr>
                        <?php foreach ($param['items'] as $key => $item) :  ?>
                            <?php if ($item->soft_delete == 0) : ?>
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
                                        <span data-bs-toggle="modal" data-bs-target="#delete<?= $item->id ?>"><i class="fas fa-trash-alt fa-lg text-danger"></i></span>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="delete<?= $item->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h3>Bạn có chắc chắn muốn xóa không ?</h3>
                                                        <a class="btn btn-danger" href="index.php?controller=type_note&action=delete&id=<?= $item->id ?>">Xóa</a>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-end">
                            <li class="page-item"><a class="page-link" href="index.php?controller=type_note&action=sort_asc&column=<?= $param['column'] ?>&page=<?= $param['pre'] ?>">Previous</a></li>
                            <?php for ($i = 1; $i <= $param['total_page']; $i++) : ?>
                                <li class="page-item"><a class="page-link" href="index.php?controller=type_note&action=sort_asc&column=<?= $param['column'] ?>&page=<?= $i ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=type_note&action=sort_asc&column=<?= $param['column'] ?>&page=<?= $param['next'] ?>">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>