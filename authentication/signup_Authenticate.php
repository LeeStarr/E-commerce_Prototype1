<?php
//getting data from form
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$cellNum=$_POST['cellNum'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$pwd_confirm=$_POST['pwd_confirm'];

//instantiate classes
include "../classes/connection.php";
include "../classes/signup_add.php";
include "../classes/signup_Validate.php";
$checkUserInfo = new SignUpValidate($name,$email,$cellNum,$username,$pwd,$pwd_confirm);

//error handelling
$checkUserInfo->signupUser();
//back to home page
header("location:../index.php?error=none");
}