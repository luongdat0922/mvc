<?php
class CategoryModel extends Model 
{
    const TABLE = 'categories';

    public function getAllCategories($select = ['*'], $limit) 
    {
        return $this->all(self::TABLE, $select, $limit);
    }

    public function addCategory($data) {
        $this->add(self::TABLE, $data);
    }

    public function updateCategory($data, $id) {
        $this->update(self::TABLE, $data, $id);
    }

    public function deleteCategory($id) {
        $this->delete(self::TABLE, $id);
    }

    public function searchCategory($id) {
        return $this->searchByID(self::TABLE, $id);
    }

    public function pageCategory($select = ['*'], $limit, $offset) {
        return $this->page(self::TABLE, $select, $limit, $offset);
    }
}
?>