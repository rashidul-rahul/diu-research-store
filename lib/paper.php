<?php
include ('../config/database.php');
class paper
{
    public $id;
    public $userId;
    public $categoryId;
    public $description;
    public $paper;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db  = new database();
    }

    public function createPaper($data){

    }

    public function viewAllPaper(){

    }

    public function viewPaperById($id){

    }
    public function updatePaperById($data, $id){

    }

    public function deletePaperById($id){

    }

    public function viewPaperByCategory($category){

    }



}