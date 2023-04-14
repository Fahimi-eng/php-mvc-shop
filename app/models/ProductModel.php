<?php

class ProductModel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function all( $category_id, $is_available)
    {
        if ($category_id == 0)
        {
            if ($is_available == 0)
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
            elseif ($is_available > 0)
            {
                $result = $this->db->getConnection()->query('SELECT * FROM products WHERE count > 0')->fetchAll();
                return $result;
            }
            else{
                $result = $this->db->getConnection()->query('SELECT * FROM products where count = 0')->fetchAll();
                return $result;
            }
        }
        else{
            if ($is_available == 0){
                $stmt = $this->db->getConnection()->prepare("SELECT * FROM products WHERE category_id= :id");
                $stmt->bindParam(":id",$category_id);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result)
                {
                    return $result;
                }
                else{
                    return false;
                }
            }
            elseif ($is_available > 0){
                $stmt = $this->db->getConnection()->prepare("SELECT * FROM products WHERE category_id= :id AND count > 0");
                $stmt->bindParam(":id",$category_id);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result)
                {
                    return $result;
                }
                else{
                    return false;
                }
            }
            else{
                $stmt = $this->db->getConnection()->prepare("SELECT * FROM products WHERE category_id= :id AND count < 0");
                $stmt->bindParam(":id",$category_id);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result)
                {
                    return $result;
                }
                else{
                    return false;
                }
            }

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
