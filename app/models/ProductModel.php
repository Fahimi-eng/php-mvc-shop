<?php
require_once 'app/models/Model.php';
class ProductModel implements Model
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function get($id)
    {
        $result = $this->db->getConnection()->prepare("SELECT * FROM products INNER JOIN categories ON products.category_id=categories.id  WHERE products.id= :id");
        $result->bindParam(":id", $id);
        $result->execute();
        $record = $result->fetch(PDO::FETCH_ASSOC);
        if ($record) {
            return $record;
        } else {
            return false;
        }
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
                $stmt = $this->db->getConnection()->prepare("SELECT * FROM products WHERE category_id= :id ");
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
    public function store($product, $images)
    {
//        $this->db->getConnection()->beginTransaction();
        $name = $product['name'];
        $price = $product['price'];
        $color = $product['color'];
        $is_visible = $product['is_visible'];
        $description = $product['description'];
        $category_id = $product['category_id'];
        $count = $product['count'];
        //prepare and execute insert query
        $sql = "INSERT INTO products (name, price, color, is_visible, description, category_id, count) VALUES (:name, :price, :color, :is_visible, :description, :category_id,:xxx)";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':is_visible', $is_visible);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':xxx', $count);
        $stmt->execute();
        // Get the product ID
        $productID = $this->db->getConnection()->lastInsertId();
        foreach ($images as $image) {
            $stmt = $this->db->getConnection()->prepare("INSERT INTO images (product_id, image) VALUES (:product_id, :image)");
            $stmt->bindParam(':product_id', $productID);
            $stmt->bindParam(':image', $image);
            $stmt->execute();
        }
//        $this->db->getConnection()->commit();
        return true;
    }

    public function delete($id)
    {


//        $this->db->getConnection()->beginTransaction();
//        $stmt1 = $this->db->getConnection()->prepare("UPDATE products SET category_id = NULL WHERE id = :id;");
//        $stmt1->bindParam(':id', $id);
//        $stmt1->execute();
        //prepare and execute delete query
        $stmt2 = $this->db->getConnection()->prepare("DELETE FROM products WHERE id = :id");
        $stmt2->bindParam(':id', $id);
        $stmt2->execute();
//        $this->db->getConnection()->commit();
        return true;
    }
}
