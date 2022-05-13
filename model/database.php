<?php
$db = new mysqli("localhost","root","","mohammadgram");

if($db->connect_error)
{
    echo "error";
}

else
{
    $db->query("SET CHARACTER SET uft8");
    mysqli_set_charset($db,"utf8");
}

?>