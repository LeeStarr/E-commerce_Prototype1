<?php

class SignUpAdd extends DBM{
    protected function addUser($username,$name,$email,$cellNum,$pwd){
        $statement= $this->connect()->prepare('INSERT INTO user_information (username,name,email,cellNumber,password) VALUES (?,?,?,?,?);');

        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

        if(!$statement->execute(array($username,$name,$email,$cellNum,$hashedPwd))){
            $statement=null;
            header("loctaion: ../index.php?error=statmentFailed");
            exit();
        }
        $statement=null;
    }
    protected function checkUser($username,$email){
        $statement= $this->connect()->prepare('SELECT username FROM user_information WHERE username=? OR email=?;');
        if(!$statement->execute(array($username,$email))){
            $statement=null;
            header("loctaion: ../index.php?error=statmentFailed");
            exit();
        }
        $resultCheck;
        if($statement->rowCount()>0){
                $resultCheck=false;
        }
        else{
            $resultCheck=true;

        }
        return $resultCheck;
    }
}