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
        $sql = "select ${columns} from ${table} limit ${limit}";
        $query = $this->_query($sql)->fetchAll();
        return $query;
    }

    public function searchByID($table, $id) 
    {
        $sql = "select * from ${table} where id = ${id} limit 1";
        $query = $this->_query($sql)->fetch();
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

    private function _query($sql) 
    {
        return $this->pdo->query($sql);
    }
}    
?>