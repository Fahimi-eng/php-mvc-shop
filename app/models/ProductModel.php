<?php

class ProductModel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function all()
    {
        $result = $this->db->getConnection()->query('SELECT * FROM products')->fetchAll();
        if ($result)
        {
            return $result;
        }
        else{
            return false;
        }
    }

    public function store($product, $image)
    {
        $title = $product['title'];
        $price = $product['price'];
        $color = $product['color'];
        $is_visible = $product['is_visible'];
        $description = $product['description'];
        $category_id = $product['category_id'];
        $count = $product['count'];

        //prepare and execute insert query
        $sql = "INSERT INTO products (title, price, color, is_visible, description, category_id, image, count) VALUES (:title, :price, :color, :is_visible, :description, :category_id, :image, :count)";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':is_visible', $is_visible);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':count', $count);
        $stmt->execute();
        return true;
    }
}
