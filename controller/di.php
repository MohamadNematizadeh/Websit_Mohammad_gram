<?php
include "controller/database.php";


$password = $_POST["password"];
$_password = $_POST["-password"];


if($password != $_password)
{
    header("Location: form.php");
}


$first_name = $_POST["first-name"];
$account_name = $_POST["account-name"];
$mobile_number = $_POST["mobile-number"];
$last_name = $_POST["last-name"];
$email=$_POST ["email"];
$birthday = $_POST["date-of-birth"];


$db->query("INSERT INTO users (first_name, last_name, user_name, password, email, mobile_number,birthday) VALUES ('$first_name', '$last_name', '$account_name', '$email', '$password', '$mobile_number', '$birthday')");
echo " با موفقیت اطلاعات ثبت شد.";
    


