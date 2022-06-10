<?php
class CartController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->model('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        session_start();
        $products = isset($_SESSION['cart']) ? $_SESSION['cart'] :[];
        $this->view(
            'frontend.cart.index',
            [
                "products" => $products
            ]
        );
    }

    public function add()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $product = $this->productModel->searchProduct($id);
        session_start();
        if (empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])) {
            $product['quantity'] = $_POST['quantity'][$id];
            $_SESSION['cart'][$id] = $product;
        } else {
            $product['quantity'] = $_SESSION['cart'][$id]['quantity'] + $_POST['quantity'][$id];
            $_SESSION['cart'][$id] = $product;
        }
        header('location: index.php?controller=cart');
    }

    public function update()
    {
        session_start();
        foreach ($_POST['quantity'] as $id => $quantity) {
            if ($quantity <= 0 || !is_numeric($quantity)) {
                continue;
            }
            if ($quantity == 0) {
                unset($_SESSION['cart'][$id]);
            } else {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            }
        }
        header('location: index.php?controller=cart');
    }

    public function delete()
    {
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        unset($_SESSION['cart'][$id]);
        header('location: index.php?controller=cart');
    }


}
