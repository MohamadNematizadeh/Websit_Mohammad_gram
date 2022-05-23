<?php


include "model/database.php";
$caption = $_POST["text"];
$userid =$_SESSION["user_id"];
$db->query("INSERT INTO posts(caption,user_id) VALUES('$caption',$userid)");
//header("Location:home");
?>