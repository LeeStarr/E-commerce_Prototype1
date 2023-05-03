<?php

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$pwd=$_POST['pwd'];


//instantiate classes
include "../classes/connection.php";
include "../classes/login_add.php";
include "../classes/login_Validate.php";
$login = new LoginValidate($username,$pwd);

//error handelling
$login->loginUser();
//back to home page
header("location:../login.php?error=none");
}