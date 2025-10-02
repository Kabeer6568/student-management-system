<?php

require_once "db.php";


class Student {

    private $pdo;
    public $route = "http://localhost/student-management-system/";

    public function __construct(){

        $db = new Database;
        $this->pdo = $db->pdo;

    }

    public function stu_registeration($username , $useremail , $pass , $course){

        if ($this->checkemail($useremail)) {
          echo "<script>alert('The Email {$useremail} already exists');</script>";

        }
        else{

        $query = "INSERT INTO students (username , useremail , userpass , course) VALUES
        (? , ?  , ? , ?)";

        $hash = password_hash($pass , PASSWORD_BCRYPT);

        $stat = $this->pdo->prepare($query);
        
        $res = $stat->execute([$username , $useremail , $hash , $course]);

        return $res;
        }
    }


    public function checkemail($useremail){

        $query = "SELECT * FROM students WHERE useremail = ?";
        $stat = $this->pdo->prepare($query);
        $stat->execute([$useremail]);
        $res = $stat->rowCount() > 0;
        
        return $res;

    }


    public function stu_login($username , $pass){

        $query = "SELECT * FROM students WHERE username = ? OR useremail = ?";
        $stat = $this->pdo->prepare($query);
        $stat->execute([$username , $username]);
        $row = $stat->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            
            $storedHash = $row['userpass'];
            if (password_verify($pass , $storedHash)) {
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                
                header("location: {$this->route}students/");
            }
            else{
                echo "<script>
    alert(' Incorrect Password');
</script>";
            }
        }
        else{
                echo "<script>
    alert(' Incorrect Username Or Email');
</script>";
            }

    }

    public function pageVisible(){

        if (empty($_SESSION['userid'])) {
            header("location: {$this->route}");
        }
        

    }

}