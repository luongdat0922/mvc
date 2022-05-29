<?php
class ProductModel extends Model 
{
    const TABLE = 'products';

    public function getAllProducts($select = ['*'], $limit) 
    {
        return $this->all(self::TABLE, $select, $limit);
    }

    public function searchProduct($id)
    {
        return $this->searchByID(self::TABLE, $id);   
    }

    public function addProduct($data) {
        $this->add(self::TABLE, $data);
    }

    public function updateProduct($data, $id) {
        $this->update(self::TABLE, $data, $id);
    }

    public function deleteProduct($id) {
        $this->delete(self::TABLE, $id);
    }
}
?>