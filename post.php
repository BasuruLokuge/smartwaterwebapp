<?php
include 'includes/db.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();
?>

<h1><?= $post['title']; ?></h1>
<img src="uploads/images/<?= $post['image']; ?>" width="300">
<p><?= $post['content']; ?></p>
