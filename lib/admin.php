<?php
include_once ('../config/database.php');
class admin
{
    public  $id;
    public $name;
    public $email;
    public $userName;
    private $password;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function createAdmin($data){

    }

    public function adminLogin($data){

    }

    public function viewAllAdmin(){

    }

    public function viewAdminByID(){

    }
    public function updateAdminById($data, $id){

    }

    public function deleteAdminById($id){

    }
}