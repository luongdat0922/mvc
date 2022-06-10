<?php
class AdminController extends Controller 
{
    private $categoryModel;
    private $productModel;

    public function __construct()
    {
        $this->model('CategoryModel');
        $this->categoryModel = new CategoryModel;
        $this->model('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        $this->view(
            'frontend.admin.index'
        );
    }

    public function categories()
    {
        $items = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $items;
        $page = $this->categoryModel->pageCategory(['id', 'name', 'date_time'], $items, $offset);
        $categories = $this->categoryModel->getAllCategories(['id', 'name', 'date_time'], 100);
        $totalRecords = count($categories);
        $totalPages = ceil($totalRecords / $items);
        return $this->view('frontend.admin.categories.categories',
        [
            "categories" => $page,
            "totalPages" => $totalPages,
            "items" => $items,
            "currentPage" => $currentPage
        ]);
    }

    public function categoriesUpdate() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!empty($id)) {
            $category = $this->categoryModel->searchCategory($id);
            return $this->view('frontend.admin.categories.update',
            [
                "category" => $category
            ]);
        }
    }

    public function products() {
        $items = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $items;
        $page = $this->productModel->pageProduct(['id', 'image', 'name', 'price', 'quantity', 'date_time'], $items, $offset);
        $products = $this->productModel->getAllProducts(['id', 'name', 'date_time'], 100);
        $categories = $this->categoryModel->getAllCategories(['id', 'name', 'date_time'], 100);
        $totalRecords = count($products);
        $totalPages = ceil($totalRecords / $items);
        return $this->view('frontend.admin.products.products',
        [
            "products" => $page,
            "totalPages" => $totalPages,
            "items" => $items,
            "currentPage" => $currentPage,
            "categories" => $categories
        ]);
    }

    public function productsUpdate() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!empty($id)) {
            $product = $this->productModel->searchProduct($id);
            return $this->view('frontend.admin.products.update',
            [
                "product" => $product
            ]);
        }
    }

    public function logOut() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?controller=login");
    }

    public function chart()
    {
        $this->view(
            'frontend.admin.chart.chart'
        );
    }
}
