<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5 mb-5">Các ghi chú</h1>
        <div class="col-md-8">
            <?php if (isset($_SESSION['flash_message'])) : ?>
                <?php $message = $_SESSION['flash_message']; ?>
                <?php unset($_SESSION['flash_message']); ?>
                <div class="alert alert-success"><i class="fas fa-check"></i> <?= $message ?></div>
            <?php endif; ?>
            <a href="index.php?controller=note&action=create" class="btn btn-success mt-1" style="width: 100%">Thêm mới</a>
            <form method="POST" action="index.php?controller=note&action=search">
                <div class="row mt-2">
                    <div class="col-md-2">
                        <select class="form-select" name="type_id">
                            <option value="">Thể loại</option>
                            <?php foreach ($param['types'] as $type) : ?>
                                <?php if ($type->soft_delete == 0) : ?>
                                    <option value="<?= $type->id ?>"><?= $type->name ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-9">
                        <input class="form-control" type="text" placeholder="Tiêu đề" name="search">

                    </div>
                    <div class="col-1">
                        <button type="submit" class="form-control btn btn-secondary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>STT
                                <a href="index.php?controller=note&action=sort_asc&column=id">
                                    <i class="fa fa-fw fa-sort-up text-secondary"></i>
                                </a>
                            </th>
                            <th>Tiêu đề
                                <a href="index.php?controller=note&action=sort_asc&column=title">
                                    <i class="fa fa-fw fa-sort-up text-secondary"> </i>
                                </a>
                            </th>
                            <th>Phân loại
                                <a href="index.php?controller=note&action=sort_asc&column=name">
                                    <i class="fa fa-fw fa-sort-up text-secondary"> </i>
                                </a>
                            </th>
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
                                    <span data-bs-toggle="modal" data-bs-target="#delete<?= $item->id ?>"><i class="fas fa-trash-alt fa-lg text-danger"></i></span>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="delete<?= $item->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h3>Bạn có chắc chắn muốn xóa không ?</h3>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <a class="btn btn-danger mr-auto" href="index.php?controller=note&action=delete&id=<?= $item->id ?>">Xóa</a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <div>
                    <nav aria-label="Page navigation example ">
                        <ul class="pagination d-flex justify-content-end">
                            <li class="page-item"><a class="page-link" href="index.php?controller=note&action=sort_desc&column=<?= $param['column'] ?>&page=<?= $param['pre'] ?>">Previous</a></li>
                            <?php for ($i = 1; $i <= $param['total_page']; $i++) : ?>
                                <li class="page-item"><a class="page-link" href="index.php?controller=note&action=sort_desc&column=<?= $param['column'] ?>&page=<?= $i ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=note&action=sort_desc&column=<?= $param['column'] ?>&page=<?= $param['next'] ?>">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>