<?php
include './Views/frontend/admin/inc/header.php';
include('./Views/frontend/admin/inc/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ALL CATEGORIES</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) { ?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name'] ?></td>
                                <td>
                                    <form action="index.php?controller=admin&action=categoriesUpdate&id=<?= $category['id'] ?>" method="post">
                                        <button type="submit" name="update_btn" class="btn btn-success">UPDATE</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="index.php?controller=category&action=delete&id=<?= $category['id'] ?>" method="post">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                                <td><?= $category['date_time'] ?></td>
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
                        <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=categories&per_page=<?= $items ?>&page=<?= $first_page ?>">First</a></li>
                        <?php } ?>
                        <?php 
                            if ($currentPage > 2) { 
                                $previous_page = $currentPage - 1;
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=categories&per_page=<?= $items ?>&page=<?= $previous_page ?>">Previous</a></li>
                        <?php } ?>
                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                            <?php if ($num != $currentPage) { ?>
                                <?php if ($num > $currentPage - 3 && $num < $currentPage + 3) { ?>
                                <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=categories&per_page=<?= $items ?>&page=<?= $num ?>"><?= $num ?></a></li>
                                <?php } ?>
                            <?php } else { ?>
                                <li class="page-item"><a class="page-link" href="#"><strong><?= $num ?></strong></a></li>
                            <?php } ?>
                        <?php } ?>
                        <?php 
                            if ($currentPage < $totalPages - 1) { 
                                $next_page = $currentPage + 1;
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=categories&per_page=<?= $items ?>&page=<?= $next_page ?>">Next</a></li>
                        <?php } ?>
                        <?php 
                            if ($currentPage < $totalPages - 3) { 
                                $last_page = $totalPages;
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=admin&action=categories&per_page=<?= $items ?>&page=<?= $last_page ?>">Last</a></li>
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
                <h5 class="modal-title" id="exampleModalLabel">ADD CATEGORY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?controller=category&action=add" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" onblur="inputName(this);" name="name" class="form-control" placeholder="">
                    </div>
                    <script>
                        function inputName(name) {
                            if (name.value == '') {
                                alert("Please enter a name");
                            }
                        }
                    </script>
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