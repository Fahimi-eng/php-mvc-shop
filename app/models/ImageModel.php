<?php
class ImageModel
{
    public function __construct() {
        $this->db = new Database();
    }

    public function get_images_by_product_id($category_id)
    {
        $stmt = $this->db->getConnection()->prepare('SELECT * FROM images WHERE product_id= :id');
        $stmt->bindParam(':id', $category_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function all()
    {
        return $this->db->getConnection()->query('SELECT * FROM images')->fetchAll();
    }
}