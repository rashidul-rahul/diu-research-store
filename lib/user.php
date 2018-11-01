<?php
include_once ('config/database.php');
//include_once ('session.php');
class User
{
    public $id;
    public $name;
    public $email;
    private $password;
    public $address;
    public $phone;
    public $createdAt;
    private $db;

    public  function __construct(){
        $this->db = new database();
    }

    public  function userRegistration($data){
        $name = $data['fullName'];
        $email = $data['email'];
        $password = md5($data['password']);
        $versityId = $data['versityId'];

        $sql = "INSERT INTO `user` (`id`, `fullName`, `email`, `versityId`, `password`, `createdAt`) VALUES (NULL, '".$name."', '".$email."', '".$versityId."', '".$password."', CURRENT_TIMESTAMP);";
        return $this->db->pdo->exec($sql);
    }

    public function userLogin($data){
        $versityId = $data['versityId'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM `user` WHERE user.versityId = '".$versityId."' AND user.password = '".$password."'";
        $stmt = $this->db->pdo->query($sql);
        if($stmt){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }else{
            return "nothing";
        }

    }

    public function allUser(){
        $sql = "SELECT * FROM `user`";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        } else{
            return 'False';
        }

    }
    public function viewUserByID($id){
        $sql = "SELECT * FROM `user` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        } else{
            return 'False';
        }
    }

    public function updateUser($data, $id){
        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
        $phone  = $data['phone'];
        $sql = "UPDATE `user` SET `name` = '".$name."', `phone` = '".$phone."', `address` = '".$address."', `email` = '".$email."' WHERE `user`.`id` = ".$id.";";
        return $this->db->pdo->exec($sql);

    }
    public function deleteUser($id){
        $sql = "DELETE FROM `user` WHERE `user`.`id` = ".$id."";
        if ($this->db->pdo->exec($sql)){
            return  "SuccessFully Delete";
        }else{
            return "Delete Unsuccessful";
        }
    }
}