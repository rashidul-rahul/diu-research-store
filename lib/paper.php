<?php
include_once ('C:\xampp\htdocs\versity\config\database.php');
class paper
{
    public $id;
    public $userId;
    public $categoryId;
    public $researchObject;
    public $title;
    public $description;
    public $paper;
    public $paperImage;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db  = new database();
    }

    public function createPaper($data, $file, $image){
        $userId  = $data['userId'];
        $categoryId = $data['categoryId'];
        $researchObject = $data['researchObject'];
        $title =  $data['title'];
        $description  =  $data['description'];
        $sql = "INSERT INTO `paper` (`id`, `userId`, `categoryId`, `researchObject`, `title`, `description`, `paper`, `paperImage`, `createdAt`) VALUES (NULL, '".$userId."', '".$categoryId."', '".$researchObject."', '".$title."', '".$description."', '".$file."', '".$image."', CURRENT_TIMESTAMP);";
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
    public function viewAllLatestPaper(){
        $sql = "SELECT * FROM `paper`order by createdAt desc LIMIT 6";
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
    public function viewPaperById($id){
        $sql = "SELECT * FROM `paper` WHERE id = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'paper');
        } else{
            return 'False';
        }
    }

    public function deletePaperById($id){

    }

    public function viewPaperByCategory($category){
        $sql = "SELECT * FROM `paper` WHERE paper.categoryId = ".$category."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'paper');
        } else{
            return 'False';
        }
    }



}