<?php
class ImageModel extends Model 
{
    const TABLE = 'images';

    public function getAllImages($id)
    {
        return $this->slideShow(self::TABLE, $id);   
    }
}
?>