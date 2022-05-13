<?php

include "model/database.php";

$text = $_POST["text"];
$user_id = $_SESSION["user_id"];
echo"ddd"

    $db->query("INSERT INTO posts(caption,user_id) VALUES('$text', '$user_id')");
echo "ssss"

?>