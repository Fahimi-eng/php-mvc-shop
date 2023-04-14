<?php
class CategoryModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function all()
    {
        $result = $this->db->getConnection()->query('SELECT * FROM categories')->fetchAll();
        if ($result)
        {
            return $result;
        }
        else{
            return false;
        }
    }

    public function get($id)
    {
        $result = $this->db->getConnection()->prepare("SELECT * FROM categories WHERE id = :id");
        $result->bindParam(":id", $id);
        $result->execute();
        $records = $result->fetch(PDO::FETCH_ASSOC);

        if ($records) {
           return $records;
        } else {
            return false;
        }
    }

    public function update($id, $category)
    {
        $title = $category['title'];
        $category_id = $category['category_id'];
        //query
        $result = $this->db->getConnection()->prepare("UPDATE categories SET title = :title, category_id = :category_id WHERE id = :id");
        $result->bindParam(":title", $title);
        $result->bindParam(":category_id", $category_id);
        $result->bindParam(":id", $id);
        $result->execute();
        // Display the number of affected rows
        if ($result->rowCount()){
            return $result->rowCount();
        }
        else{
            return false;
        }
    }

    public function delete($id)
    {
        //prepare and execute delete query
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    }

    public function store($category)
    {
        $title = $category['title'];
        $category_id = $category['category_id'];
        //prepare and execute insert query
        $sql = "INSERT INTO categories (title, category_id) VALUES (:title, :category_id)";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
        return true;
    }
}
?>