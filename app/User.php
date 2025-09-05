<?php
include('Database.php');

// As soon obj created for User : Database will be connected
class User extends Database{ 
    private $table_name = 'users';

    public $id;
    public $name;
    public $email;
    public $password;

    public function register(){
        // Check Duplication
        $query = "SELECT * FROM  ". $this->table_name ." WHERE email = :email ";
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(':email',$this->email);
        $stmt->execute();

        if($stmt->rowCount()>0){  // User Duplication Found so exit
            return false;  // User Duplication Foun
        }
        // print_r($this->password);  // checking passed/set data from register page (view/form)
        // exit;

        // 
        $query = "INSERT INTO ". $this->table_name ." (name , email, password)
                  VALUES (:name, :email, :password)";

        $stmt = $this->conn->prepare($query);

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':password',$this->password);

        if($stmt->execute()){
            return true;
        }else{return false;}
    }

    public function login(){
        // print_r($this->password);  // checking passed/set data from register page (view/form)
        // exit;

        $query = "SELECT * FROM  ". $this->table_name ." WHERE email = :email ";
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(':email',$this->email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // print_r($row);
        // exit();

        if( $row && password_verify($this->password, $row['password']) ){
            $this->id = $row['id'];
            $this->name = $row['name'];

            return true;
        }else{
            return false;
        }
    }

}
