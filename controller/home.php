<?php 
include "model/database.php";

$musics =$db->query("SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id");

$comments=$db->query("SELECT * FROM comments WHERE post_id=. $post[‘id] .ORDER BY created_at DESC()");



require "view/home.php";
?>