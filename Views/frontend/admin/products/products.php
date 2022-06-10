<?php
include './Views/frontend/admin/inc/header.php';
include('./Views/frontend/admin/inc/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ALL PRODUCTS</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) { ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><img src="<?= $product['image'] ?>" style="width: 200px; height: 200px" class="img-thumbnail"></td>
                                <td><?= $product['name'] ?></td>
                                 <td>$<?= $product['price'] ?></td>
                                  <td><?= $product['quantity'] ?></td>
                                <td>
                                    <form action="index.php?controller=admin&action=productsUpdate&id=<?= $product['id'] ?>" method="post">
                                        <button type="submit" name="update_btn" class="btn btn-success">UPDATE</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="index.php?controller=product&action=delete&id=<?= $product['id'] ?>" method="post">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                                <td><?= $product['date_time'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <?php
                        if ($currentPage > 3) {
                            $first_page = 1;
                        ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=products&per_page=<?= $items ?>&page=<?= $first_page ?>">First</a></li>
                        <?php } ?>
                        <?php
                        if ($currentPage > 2) {
                            $previous_page = $currentPage - 1;
                        ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=products&per_page=<?= $items ?>&page=<?= $previous_page ?>">Previous</a></li>
                        <?php } ?>
                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                            <?php if ($num != $currentPage) { ?>
                                <?php if ($num > $currentPage - 3 && $num < $currentPage + 3) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=products&per_page=<?= $items ?>&page=<?= $num ?>"><?= $num ?></a></li>
                                <?php } ?>
                            <?php } else { ?>
                                <li class="page-item"><a class="page-link" href="#"><strong><?= $num ?></strong></a></li>
                            <?php } ?>
                        <?php } ?>
                        <?php
                        if ($currentPage < $totalPages - 1) {
                            $next_page = $currentPage + 1;
                        ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=products&per_page=<?= $items ?>&page=<?= $next_page ?>">Next</a></li>
                        <?php } ?>
                        <?php
                        if ($currentPage < $totalPages - 3) {
                            $last_page = $totalPages;
                        ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=products&per_page=<?= $items ?>&page=<?= $last_page ?>">Last</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
                ADD
            </button>
        </div>
    </div>

</div>
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?controller=product&action=add" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="category3">Categories</label>
                            </div>
                            <select name="choose" class="custom-select" id="category3">
                                <?php foreach ($categories as $category) { ?>
                                    <option  value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" name="quantity" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input multiple type="file" class="custom-file-input" id="inputGroupFile02" name="file_upload[]">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input multiple type="file" class="custom-file-input" id="inputGroupFile02" name="thumbnail_upload[]">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="save" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('./Views/frontend/admin/inc/scripts.php');
include('./Views/frontend/admin/inc/footer.php');
?>