<?php
class HomeController extends Controller
{
    private $productModel;
    private $imageModel;

    public function __construct() 
    {
        $this->model('ProductModel');
        $this->productModel = new ProductModel;
        $this->model('ImageModel');
        $this->imageModel = new ImageModel;
    }

    public function index()
    {
        $products = $this->productModel->getAllProducts(['id','image', 'name', 'price'], 4);
        return $this->view('frontend.home.index', 
        [
            "products" => $products
        ]);
    }

    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id']  : null;
        $product = $this->productModel->searchProduct($id);
        $images = $this->imageModel->getAllImages($id);
        return $this->view('frontend.home.detail', [
            "product" => $product,
            "images" => $images
        ]);
    }

    public function men()
    {
        $products = $this->productModel->getAllProducts(['id','image', 'name', 'price'], 100);
        return $this->view('frontend.home.men', 
        [
            "products" => $products
        ]);
    }
}
?>