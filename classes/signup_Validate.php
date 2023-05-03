<?php

class SignUpValidate extends SignUpAdd{
   private $name;
   private $email;
   private $cellNum;
   private $username;
   private $pwd;
   private $pwd_confirm;

   public function __construct($name,$email,$cellNum,$username,$pwd,$pwd_confirm){
        $this->name=$name;
        $this->email=$email;
        $this->cellNum=$cellNum;
        $this->username=$username;
        $this->pwd=$pwd;
        $this->pwd_confirm=$pwd_confirm;
   }
   public function signupUser(){
        if ($this->emptyInput()==false){
            header("location:../index.php?error=emptyInput");
            exit();
        }
        if ($this->invalidEmail()==false){
            header("location:../index.php?error=invalidEmail");
            exit();
        }
        if ($this->pwdMatch()==false){
            header("location:../index.php?error=passwords");
            exit();
        }
        if ($this->usernameTaken()==false){
            header("location:../index.php?error=usernameTaken");
            exit();
        }
        $this->addUser($this->username,$this->name,$this->email,$this->cellNum,$this->pwd);
   }

 
   private function emptyInput(){
    $result;
    if(empty($this->name)|| empty($this->email)||empty($this->cellNum)|| empty($this->username)|| empty($this->pwd)|| empty($this->pwd_confirm) ){
        $result=false;
    }
    else{
        $result=true;
    }
       return $result;
   }
   
   

   private function invalidEmail(){
    $result;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {
        $result=false;
    }else{
        $result=true; 
    }
    return $result;
   }
private function pwdMatch(){
    $result;
    if($this->pwd!==$this->pwd_confirm)
    {
        $result=false;
    }else{
        $result=true; 
    }
    return $result;
   } 

   private function usernameTaken(){
    $result;
    if(!$this->checkUser($this->username,$this->email))
    {
        $result=false;
    }else{
        $result=true; 
    }
    return $result;
   } 
}
