<?php
class ImageModel extends Model 
{
    const TABLE = 'images';

    public function getAllImages($id)
    {
        return $this->slideShow(self::TABLE, $id);   
    }

    public function addImage($data) {
        $this->add(self::TABLE, $data);
    }
}
?>