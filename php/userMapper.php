<?php
require_once "dboconfig.php";
class UserMapper extends dboconfig
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($id_user)
    {
        $this->query = "select * from user where $id_user=:id_user";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id_user", $id_user);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

   

    public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into user (emri,mbiemri,username,email,password,cpassword, role) values (:emri,:mbiemri,:username,:email,:password,:cpassword,:role)";
        $statement = $this->conn->prepare($this->query);
        $emri = $user->getEmri();
        $mbiemri = $user->getMbiemri();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $cpassword = password_hash($user->getCPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":mbiemri", $mbiemri);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":cpassword", $cpassword);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($id_user)
    {
        $this->query = "delete from user where id_user=:id_user";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id_user", $id_user);
        $statement->execute();
    }

    public function edit(\SimpleUser $user, $id_user)
    {
        $this->query = "update user set emri=:emri, mbiemri=:mbiemri,username=:username, email=:email, role=:role where id_user=:id_user";
        // var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $emri = $user->getEmri();
        $mbiemri = $user->getMbiemri();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $role=$user->getRole();
        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":mbiemri", $mbiemri);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":id_user", $id_user);
        $statement->execute();
    }

    public function insertContact(\contact $contact)
    {
        $this->query = "insert into contact_us (username,email,phone,message) values (:username,:email,:phone,:message)";
        $statement = $this->conn->prepare($this->query);
        $username = $contact->getUsername();
        $email = $contact->getEmail();
        $phone = $contact->getPhone();
        $message = $contact->getMessage();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":message", $message);
        $statement->execute();
    }

}
