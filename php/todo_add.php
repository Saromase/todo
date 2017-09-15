<?php 
include 'function.php';
$title = $_POST['title'];
$describe = $_POST['describe'];
$img = selectRandomImage();
if ($title != null && $describe != null){
    insertIntoBDD($title, $describe, $img);
}

header('Location: ../add_todo.html');
