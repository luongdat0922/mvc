<?php
include './Views/frontend/admin/inc/header.php';
include('./Views/frontend/admin/inc/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">UPDATE PRODUCT</h6>
        </div>
        <div class="card-body">
            <form action="index.php?controller=product&action=update&id=<?= $product['id'] ?>" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="<?= $product['quantity'] ?>" class="form-control" placeholder="">
                </div>
                <a href="index.php?controller=admin&action=products" class="btn btn-danger">Cancel</a>
                <button type="submit" name="updatebtn" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>

</div>

<?php
include('./Views/frontend/admin/inc/scripts.php');
include('./Views/frontend/admin/inc/footer.php');
?>