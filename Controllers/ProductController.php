<?php
class ProductController extends Controller
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

    public function add() {
        $category = filter_input(INPUT_POST, 'choose', FILTER_SANITIZE_NUMBER_INT);
        $name = !empty($_POST['name']) ? $_POST['name'] : null;
        $price = !empty($_POST['price']) ? $_POST['price'] : null;
        $quantity = !empty($_POST['quantity']) ? $_POST['quantity'] : null;
        $description = !empty($_POST['description']) ? $_POST['description'] : null;
        $uploadPath = "./public/images";
        if (!empty($_FILES['file_upload'])) {
            $uploadFiles = $_FILES['file_upload'];
            echo "<pre>";
            var_dump($uploadFiles);
            echo "<pre>";
            $files = [];
            foreach ($uploadFiles as $key => $values) {
                foreach ($values as $index => $value) {
                    $files[$index][$key] = $value;
                }
            }
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            } 
            foreach ($files as $file) {
                $file = $this->productModel->validateUploadFile($file, $uploadPath);
                if ($file != false) {
                    move_uploaded_file($file["tmp_name"], $uploadPath . "/" . $file["name"]);
                }
            }
        }
        if (!empty($_FILES['thumbnail_upload'])) {
            $uploadThumbnails = $_FILES['thumbnail_upload'];
            $thumbnails = [];
            foreach ($uploadThumbnails as $key => $values) {
                foreach ($values as $index => $value) {
                    $thumbnails[$index][$key] = $value;
                }
            }
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            } 
            foreach ($thumbnails as $thumbnail) {
                $thumbnail = $this->productModel->validateUploadFile($thumbnail, $uploadPath);
                if ($thumbnail != false) {
                    move_uploaded_file($thumbnail["tmp_name"], $uploadPath . "/" . $thumbnail["name"]);
                }
            }
        }
        $path = $uploadPath . '/' . $files[0]['name'];
        $dataProducts = [
            "id" => '',
            "categories_id" => $category,
            "image" => "$path",
            "name" => "$name",
            "price" => $price,
            "quantity" => $quantity,
            "description" => "$description",
            "view" => 0,
            "status" => 0,
        ];
        $this->productModel->addProduct($dataProducts);
        $id = $this->productModel->_lastInsertId();
        foreach ($thumbnails as $thumbnail) {
            $path = $uploadPath . '/' . $thumbnail['name'];
            $dataImages = [
            "products_id" => $id,
            "image" => "$path",
            "status" => 0,
            ];
            $this->imageModel->addImage($dataImages);
        }
    }

    public function update() 
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : null;
        if (!empty($id) && !empty($name) && !empty($price) && !empty($quantity)) {
            $data = [
                "name" => "$name",
                "price" => $price,
                "quantity" => $quantity
            ];
            $this->productModel->updateProduct($data, $id);
        }
        header('location: index.php?controller=admin&action=products');
    }

    public function delete() 
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!empty($id)) {
            $data = [
                "status" => 1,
            ];
            $this->productModel->updateProduct($data, $id);
        }
        header('location: index.php?controller=admin&action=products');
    }
}
