<?php

class Signup extends Dbh{
    private $username;
    private $pwd;

    public function __construct($username, $pwd){
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser(){
        $query = "INSERT INTO users ('username,', 'pwd' VALUES
        (:username, :pwd";
        $stmt = parent::connect()->prepare($query);
        $smt->bindParam(":username", $this->username);
        $smt->bindParam(":pwd", $this->pwd);
        $smt->execute();
    }

    private function isEmptySubmit(){
        if (isset($this->username) && isset($this->pwd)){
            return false;
        } else {
            return true;
        }
    }

     public function signupUser(){
        //Error handlers
        if ($this->isEmptySubmit()){
            header("Location: " . $_SERVER('DOCUMENT_ROOT') . '/index.php');
            die();
        }
        //if no errors, signup user
        $this->insertUser();
     }

}