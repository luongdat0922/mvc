<?php
class CategoryController extends Controller 
{
    private $categoryModel;

    public function __construct()
    {
        $this->model('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }

    public function add() 
    {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        if (!empty($name)) {
            $data = [
                "name" => $name
            ];
            $this->categoryModel->addCategory($data);
        }
        header('location: index.php?controller=admin&action=categories');
    }

     public function update() 
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        if (!empty($id) && !empty($name)) {
            $data = [
                "name" => "$name",
            ];
            $this->categoryModel->updateCategory($data, $id);
        }
        header('location: index.php?controller=admin&action=categories');
    }

    public function delete() 
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!empty($id)) {
            $data = [
                "status" => 1,
            ];
            $this->categoryModel->updateCategory($data, $id);
        }
        header('location: index.php?controller=admin&action=categories');
    }

    
}

?>