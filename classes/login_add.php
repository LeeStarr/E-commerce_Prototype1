<?php

class LoginAdd extends DBM{
    protected function findUser($username,$pwd){
        $statement= $this->connect()->prepare('SELECT password FROM user_information WHERE username=? OR email=?;');

        if(!$statement->execute(array($username,$pwd))){
            $statement=null;
            header("loctaion: ../login.php?error=statmentFailed");
            exit();
        }
        //check if we have zero results from db
        if($statement->rowCount()==0)
        {
            $statement=null;
            header("loctaion: ../login.php?error=UserNotFound");
            exit();
        }
        $hashedpwd= $statement->fetchAll(PDO::FETCH_ASSOC);//it will fetch all required adta and return it in the form of an ASSOC (an associative array)
        $checkPwd=password_verify($pwd,$hashedpwd[0]["password"]);//[row][namee of column] here we are saying of all
        if($checkPwd==false)
        {
            $statement=null;
            header("loctaion: ../login.php?error=WrongPassword");
            exit();
        }elseif($checkPwd==true)
        {
            $statement= $this->connect()->prepare('SELECT * FROM user_information WHERE username=? OR email=? AND password=?;');

            if(!$statement->execute(array($username,$username,$pwd))){
                $statement=null;
                header("loctaion: ../login.php?error=statmentFailed");
                exit();
            }
        }
        if($statement->rowCount()==0)
        {
            $statement=null;
            header("loctaion: ../login.php?error=UserNotFound");
            exit();
        }
        $user= $statement->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['username']=$user[0]['username'];

        $statement=null;
    }
}