<?php
include './Views/frontend/admin/inc/header.php';
include('./Views/frontend/admin/inc/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">UPDATE CATEGORY</h6>
        </div>
        <div class="card-body">
            <form action="index.php?controller=category&action=update&id=<?= $category['id'] ?>" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= trim($category['name']) ?>" class="form-control" placeholder="Enter Username">
                </div>
                <a href="index.php?controller=admin&action=categories" class="btn btn-danger">Cancel</a>
                <button type="submit" name="updatebtn" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>
</div>

</div>

<?php
include('./Views/frontend/admin/inc/scripts.php');
include('./Views/frontend/admin/inc/footer.php');
?>