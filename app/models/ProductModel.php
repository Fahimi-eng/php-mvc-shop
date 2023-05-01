<?php
require_once 'app/models/Model.php';
class ProductModel implements Model
{
    private $db;
    private $connect;
    public function __construct() {
        $this->db = new Database();
        $this->connect = $this->db->getConnection();
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
                $result = $this->connect->query('SELECT * FROM products')->fetchAll();
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
                $result = $this->connect->query('SELECT * FROM products WHERE count > 0')->fetchAll();
                return $result;
            }
            else{
                $result = $this->connect->query('SELECT * FROM products where count = 0')->fetchAll();
                return $result;
            }
        }
        else{
            if ($is_available == 0){
                $stmt = $this->connect->prepare("SELECT * FROM products WHERE category_id= :id ");
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
                $stmt = $this->connect->prepare("SELECT * FROM products WHERE category_id= :id AND count > 0");
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
                $stmt = $this->connect->prepare("SELECT * FROM products WHERE category_id= :id AND count < 0");
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
//        $this->$this->connect->beginTransaction();
        $name = $product['name'];
        $price = $product['price'];
        $color = $product['color'];
        $is_visible = $product['is_visible'];
        $description = $product['description'];
        $category_id = $product['category_id'];
        $count = $product['count'];
        //prepare and execute insert query
        $sql = "INSERT INTO products (name, price, color, is_visible, description, category_id, count) VALUES (:name, :price, :color, :is_visible, :description, :category_id,:xxx)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':is_visible', $is_visible);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':xxx', $count);
        $stmt->execute();
        // Get the product ID
        $productID = $this->connect->lastInsertId();
        foreach ($images as $image) {
            $stmt = $this->connect->prepare("INSERT INTO images (product_id, image) VALUES (:product_id, :image)");
            $stmt->bindParam(':product_id', $productID);
            $stmt->bindParam(':image', $image);
            $stmt->execute();
        }
//        $this->$this->connect->commit();
        return true;
    }

    public function delete($id)
    {
        //prepare and execute delete query
        $stmt2 = $this->connect->prepare("DELETE FROM products WHERE id = :id");
        $stmt2->bindParam(':id', $id);
        $stmt2->execute();
        return true;
    }

    public function update($id, $product, $images)
    {
        $name = $product['name'];
        $price = $product['price'];
        $color = $product['color'];
        $is_visible = $product['is_visible'];
        $description = $product['description'];
        $category_id = $product['category_id'];
        $count = $product['count'];
        //prepare and execute insert query
        $sql = "UPDATE products set name= :name , price= :price, color= :color, is_visible= :is_visible, description= :description, category_id= :category_id, count= :xxx WHERE id=:id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':is_visible', $is_visible);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':xxx', $count);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
//        insert new images
//        var_dump($images);
//        die();
//        if ($images)
//        {
//            foreach ($images as $image) {
//                $stmt = $this->connect->prepare("INSERT INTO images (product_id, image) VALUES (:product_id, :image)");
//                $stmt->bindParam(':product_id', $id);
//                $stmt->bindParam(':image', $image);
//                $stmt->execute();
//            }
//        }

        return true;
    }
}
