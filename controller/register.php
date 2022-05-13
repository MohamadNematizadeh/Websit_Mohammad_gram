<?php
include "model/database.php";

$first_name =$_POST["first_name"];
$last_name =$_POST["last_name"];
$username=$_POST["username"];
$mobile_number=$_POST["mobile_number"];
$email =$_POST["email"];
$password =$_POST["password"];
$password2 =$_POST["password2"];
$birthday =$_POST["birthday"];
if($password == $password2)
{
    if(strlen($username) >= 4)
    {
        $users_count = $db->query("SELECT * FROM users WHERE username ='$username'")->num_rows;
        if($users_count == 0)
        {
            $secure_password = md5($password);
            
            $db->query("INSERT INTO users(first_name, last_name, username, mobile_number, email, password, password2, birthday) VALUES('$first_name','$last_name', '$username', '$mobile_number', '$email', '$password', '$password2','$birthday')");
            $_SESSION["message"] ="تبریک شما به جمع خانواده ما پیوستی";
            $_SESSION["message_type"] = "success";
        }else{
            $_SESSION["message"] ="نام کاربری شما تکراری است ";
            $_SESSION["message_type"] = "error";

        }
    }else{
        $_SESSION["message"] ="نام کابری نباید خیلی کوتاه باشد";
        $_SESSION["message_type"] = "error";
    }
    } else{
        $_SESSION["message"] =" در وارد کردن گذرواژه بیشتر دقت کن";
        $_SESSION["message_type"] = "error";

    }

    header("Location: index");

?>