<?php

class OrderController extends Controller
{

    private $orderModel;
    private $accountModel;
    private $productModel;

    public function __construct()
    {
        $this->model('OrderModel');
        $this->orderModel = new OrderModel;
        $this->model('AccountModel');
        $this->accountModel = new AccountModel;
        $this->model('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        session_start();
        $username = $_SESSION['username'];
        $account = $this->accountModel->findByUsername($username);

        return $this->view('frontend.cart.checkout', 
        [
            "account" => $account
        ]);
    }

    public function checkout()
    {
        session_start();
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $total = !empty($_SESSION['total']) ? $_SESSION['total'] : null;
        if (!empty($_SESSION['cart'])) {
            $order = [
                'id' => rand(100, 100000),
                'accounts_id' => $id,
                'total' => $total,
            ];
            $this->orderModel->createOrder($order);
            foreach ($_SESSION['cart'] as $product) {
                $this->orderModel->createOrderDetail([
                    'orders_id' => $order['id'],
                    'products_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                ]);
                $this->productModel->subQuantity($product['id'], $product['quantity']);
            }
            unset($_SESSION['cart']);
            unset($_SESSION['total']);
            header('location: index.php?controller=order&action=complete');
        }
    }

    public function complete()
    {
        return $this->view('frontend.cart.complete');
    }
    
}
