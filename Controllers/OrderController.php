<?php

class OrderController extends Controller
{

    private $orderModel;
    private $accountModel;

    public function __construct()
    {
        $this->model('OrderModel');
        $this->orderModel = new OrderModel;
        $this->model('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function index()
    {
        session_start();
        return $this->view('frontend.cart.checkout');
    }

    public function checkout()
    {
        session_start();

        if (!empty($_SESSION['cart'])) {
            $order = [
                'id' => rand(100, 100000),
                'accounts_id' => 1,
            ];
            $this->orderModel->createOrder($order);
            foreach ($_SESSION['cart'] as $product) {
                $this->orderModel->createOrderDetail([
                    'orders_id' => $order['id'],
                    'products_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                ]);
            }
            unset($_SESSION['cart']);
            header('location: index.php?controller=cart&action=complete');
        }
    }

    public function complete()
    {
        return $this->view('frontend.cart.complete');
    }
}
