<?php

class Dbh{
    private $host = "localhost";
    private $dbname = "database";
    private $dbusername = "root";
    private $dbpassword = "";


    protected function connect() {
        try{
            $pdo = new PDO("mysql:host=" . $this->host .
            ";dbname=" . $this-dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

    } catch (PDOException $e){
        die("Connection failed: " . $e->getMessage());
    }
}}