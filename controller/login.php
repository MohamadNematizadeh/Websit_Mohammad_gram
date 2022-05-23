<?php
include "model/database.php";
$username =$_POST["username"];
$password = $_POST["password"];

$secure_password = md5($password);

 $users_count = $db->query("SELECT*FROM users WHERE username ='$username' AND password ='$secure_password'")->num_rows
 if($users_count == 1)
 {
     $_SESSION["login_status"] = true ;
     $_SESSION["username"] = $username ;
     $_SESSION["user_id"] = $user["id"];
     header("Location: home");

 }else{
     $_SESSION["message"] = "نام کاربری با گذرواژه شما صحیح نمی باشد";
     $_SESSION["message_type"] = "error";

     header("Location: index");

 }
?>
