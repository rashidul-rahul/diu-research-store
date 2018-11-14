<?php
include_once ('C:\xampp\htdocs\versity\config\database.php');
class Category{
    public $id;
    public $name;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAllCategory(){
        $query ="SELECT * FROM `category`";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        if($stmt){
            $allData = $stmt->fetchAll(PDO::FETCH_CLASS, "Category");
            return $allData;
        } else{
            return false;
        }
    }
    public function createCategory($data){
        $name = $data['name'];
        if(empty($name)){
            return false;
        }else {
            $sql = "INSERT INTO `category` (`id`, `name`, `createdAt`) VALUES (NULL, '".$name."', CURRENT_TIMESTAMP);";
            return $this->db->pdo->exec($sql);
        }

    }

    public function viewCategoryByID($id){
        $sql = "SELECT * FROM `category` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return  $stmt->fetchAll(PDO::FETCH_CLASS, 'category');
        } else{
            return 'False';
        }
    }

    public function upadateCategory($data, $id){
        $name = $data['name'];
        $sql = "UPDATE `category` SET `name` = '".$name."' WHERE `category`.`id` = ".$id.";";
        return $this->db->pdo->exec($sql);

    }
    public function deleteCategory($id){
        $sql = "DELETE FROM `category` WHERE `category`.`id` = ".$id."";
        if ($this->db->pdo->exec($sql)){
            return  "SuccessFully Delete";
        }else{
            return "Delete Unsuccessful";
        }
    }
}