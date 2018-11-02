<?php
include_once ('C:\xampp\htdocs\versity\config\database.php');
class paper
{
    public $id;
    public $userId;
    public $categoryId;
    public $title;
    public $description;
    public $paper;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db  = new database();
    }

    public function createPaper($data, $file){
        $userId  = $data['userId'];
        $categoryId = $data['categoryId'];
        $title =  $data['title'];
        $description  =  $data['description'];
        $upload = $file;
        $sql = "INSERT INTO `paper` (`id`, `userId`, `categoryId`, `title`, `description`, `paper`, `createdAt`) VALUES (NULL, '".$userId."', '".$categoryId."', '".$title."', '".$description."', '$upload', CURRENT_TIMESTAMP);";
        return $this->db->pdo->exec($sql);
    }

    public function viewAllPaper(){
        $sql = "SELECT * FROM `paper`";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'paper');
        } else{
            return 'False';
        }
    }

    public function getAllPaperByUserId($id){
        $sql = "SELECT * FROM `paper` WHERE paper.userId = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'paper');
        } else{
            return 'False';
        }
    }
    public function updatePaperById($data, $id){

    }

    public function deletePaperById($id){

    }

    public function viewPaperByCategory($category){

    }



}