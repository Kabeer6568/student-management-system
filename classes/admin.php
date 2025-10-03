<?php

require_once "db.php";


class Admin extends Database{

    public function adminLogin($username , $pass){
                $query = "SELECT * FROM admins WHERE username = ? OR useremail = ?";
        $stat = $this->pdo->prepare($query);
        $stat->execute([$username , $username]);
        $row = $stat->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            
            $storedHash = $row['userpass'];
            if ($pass === $storedHash) {
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                
                header("location: {$this->route}admin/");
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