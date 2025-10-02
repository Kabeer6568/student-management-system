<?php

class Database{

    public $pdo;
    private $host = "localhost";
    private $username = "root";
    private $pass = "";

    public function __construct(){
        try {
        $this->pdo = new PDO("mysql:host = $this->host ", "$this->username" , "$this->pass");

        
            if ($this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)) {
                $this->createDB();
            }
    } catch (PDOException $e) {
        echo "DB Failed: " . $e->getMessage();
    }

    
}

    public function createDB(){

        $createDB_query = "CREATE DATABASE IF NOT EXISTS student_management_system";
        $createDB = $this->pdo->query($createDB_query);

        try {
            if ($createDB == FALSE) {
                throw new Exception("DB Creation Failed: " . $this->pdo->error);
            }
            else{
                $this->createStudentTable();
                $this->createAdminTable();
            }
        } catch (Throwable $th) {
            echo "Error: " . $th -> getMessage();
        }

    }

    public function createStudentTable(){

        $useDB = "USE student_management_system";
        $this->pdo->query($useDB);

        $createTable_query = "CREATE TABLE IF NOT EXISTS students(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        useremail VARCHAR(255) NOT NULL,
        userpass VARCHAR(255) NOT NULL,
        course VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $res = $this->pdo->query($createTable_query);

        if ($res == FALSE) {
            echo "Error Creating Table";
        }

    }
    public function createAdminTable(){

        $useDB = "USE student_management_system";
        $this->pdo->query($useDB);

        $createTable_query = "CREATE TABLE IF NOT EXISTS admins(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        useremail VARCHAR(255) NOT NULL,
        userpass VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $res = $this->pdo->query($createTable_query);

        if ($res == FALSE) {
            echo "Error Creating Table";
        }

    }
}

