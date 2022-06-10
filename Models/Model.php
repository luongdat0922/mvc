<?php
class Model extends Database 
{
    protected $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function all($table, $select = ['*'], $limit) 
    {
        $columns = implode(",", $select);
        $sql = "select ${columns} from ${table} where status = false limit ${limit} ";
        $query = $this->_query($sql)->fetchAll();
        return $query;
    }

    public function page($table, $select = ['*'], $limit, $offset) 
    {
        $columns = implode(",", $select);
        $sql = "select ${columns} from ${table} where status = false order by id asc limit ${limit} offset ${offset}";
        $query = $this->_query($sql)->fetchAll();
        return $query;
    }

    public function featured($table) {
        $sql = "select * from ${table} order by view desc limit 8";
        $query = $this->_query($sql)->fetchAll();
        return $query;
    }

    public function searchByID($table, $id) 
    {
        $sql = "select * from ${table} where id = '$id' limit 1";
        $query = $this->_query($sql)->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    public function searchByUsername($table, $username) 
    {
        $sql = "select * from ${table} where username = '$username' limit 1";
        $query = $this->_query($sql)->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    public function searchByName($table, $name) 
    {
        $sql ="select * from ${table} where name like '%$name%'";
        $query = $this->_query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function slideShow($table, $id) 
    {
        $sql = "select * from ${table} where products_id = '$id'";
        $query = $this->_query($sql)->fetchAll();
        return $query;
    }

    public function add($table, $data = []) 
    {
        $columns = implode(",", array_keys($data));
        $values = array_map(function($value) {
            return " ' " . $value . " ' ";
        }, array_values($data));

        $values = implode(",", $values);

        $sql = "insert into ${table}(${columns}) values(${values})";
        $this->_query($sql);
    }

    public function update($table, $data = [], $id) 
    {
        $setData = [];
        foreach ($data as $key => $value) {
            array_push($setData, "${key} =  ' " . $value . " ' ");
        }
        $values = implode(",", $setData);
        $sql = "update ${table} set ${values} where id = ${id}";
        $this->_query($sql);
    }

    public function updateView($table, $id) {
        $sql = "update ${table} set view = view + 1 where id = ${id}";
        $this->_query($sql);
    }

    public function updateQuantity($table, $id, $quantity) {
        $sql = "update ${table} set quantity = quantity - " . $quantity . " where id = ${id}";
        $this->_query($sql);
    }

    public function delete($table, $id)
    {
        $sql = "delete from ${table} where id = ${id}";
        $this->_query($sql);
    }
    
    public function checkLogin($table, $username, $password) {
        $sql = "select * from ${table} where username = '$username' and password = '$password' limit 1";
        $query = $this->_query($sql)->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    function validateUploadFile($file, $uploadPath) {
        //Kiểm tra xem có vượt quá dung lượng cho phép không?
        if ($file['size'] > 2 * 1024 * 1024) { //max upload is 2 Mb = 2 * 1024 kb * 1024 bite
            return false;
        }
        //Kiểm tra xem kiểu file có hợp lệ không?
        $validTypes = array("jpg", "jpeg", "png", "bmp","xls","xlsx","doc","docx");
        $fileType = substr($file['name'], strrpos($file['name'], ".") + 1);
        if (!in_array($fileType, $validTypes)) {
            return false;
        }
        //Check xem file đã tồn tại chưa? Nếu tồn tại thì đổi tên
        $num = 1;
        $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
        while (file_exists($uploadPath . '/' . $fileName . '.' . $fileType)) {
            $fileName = $fileName . "(" . $num . ")";
            $num++;
        }
        $file['name'] = $fileName . '.' . $fileType;
        return $file;
    }

    private function _query($sql) 
    {
        return $this->pdo->query($sql);
    }

    public function _lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}
