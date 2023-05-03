<?php

class LoginValidate extends LoginAdd{
   private $username;
   private $pwd;

   public function __construct($username,$pwd){
        $this->username=$username;
        $this->pwd=$pwd;
   }
   public function loginUser(){
        if ($this->emptyInput()==false){
            header("location:../login.php?error=emptyInput");
            exit();
        }
        $this->findUser($this->username, $this->pwd);
   }

 
   private function emptyInput(){
    $result;
    if(empty($this->username)|| empty($this->pwd) ){
        $result=false;
    }
    else{
        $result=true;
    }
       return $result;
   }
   
   
}
