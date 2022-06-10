<?php
class ProductModel extends Model 
{
    const TABLE = 'products';

    public function getAllProducts($select = ['*'], $limit) 
    {
        return $this->all(self::TABLE, $select, $limit);
    }

    public function featuredProducts() 
    {
        return $this->featured(self::TABLE);
    }

    public function addProduct($data) 
    {
        $this->add(self::TABLE, $data);
    }

    public function updateProduct($data, $id) 
    {
        $this->update(self::TABLE, $data, $id);
    }

    public function deleteProduct($id) 
    {
        $this->delete(self::TABLE, $id);
    }

    public function searchProduct($id)
    {
        return $this->searchByID(self::TABLE, $id);   
    }

    public function addView($id) 
    {
        $this->updateView(self::TABLE, $id);
    }

    public function subQuantity($id, $quantity) 
    {
        $this->updateQuantity(self::TABLE, $id, $quantity);
    }

    public function searchNameProduct($name)
    {
        return $this->searchByName(self::TABLE, $name);
    }

    public function pageProduct($select = ['*'], $limit, $offset) 
    {
        return $this->page(self::TABLE, $select, $limit, $offset);
    }
}
?>