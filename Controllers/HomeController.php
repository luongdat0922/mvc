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
        $products = $this->productModel->featuredProducts();
        return $this->view('frontend.home.index', 
        [
            "products" => $products
        ]);
    }

    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id']  : null;
        $this->productModel->addView($id);
        $product = $this->productModel->searchProduct($id);
        $images = $this->imageModel->getAllImages($id);
        return $this->view('frontend.home.detail', [
            "product" => $product,
            "images" => $images
        ]);
    }

    public function products()
    {
        $products = $this->productModel->getAllProducts(['id','image', 'name', 'price'], 100);
        return $this->view('frontend.home.products', 
        [
            "products" => $products
        ]);
    }

    public function search() {
        $name = !empty($_POST['key']) ? $_POST['key'] : null;
        $products = $this->productModel->searchNameProduct($name);
        return $this->view('frontend.home.search', 
        [
            "products" => $products,
            "name" => $name
        ]);
    }

    public function logOut() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?controller=login");
    }
}
?>