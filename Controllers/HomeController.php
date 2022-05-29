<?php
class HomeController extends Controller 
{
    private $productModel;

    public function __construct() {
        $this->model('ProductModel');
        $this->productModel = new ProductModel;
    }

     public function index()
    {
        $products = $this->productModel->getAllProducts(['image', 'name', 'price'], 4);
        return $this->view('frontend.home.index', 
        [
            "products" => $products
        ]);
    }
}
?>