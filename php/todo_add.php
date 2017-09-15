<?php 
include 'function.php';
$title = $_POST['title'];
$describe = $_POST['describe'];
$img = "img/maxres.jpg";
if ($title != null && $describe != null){
    insertIntoBDD($title, $describe, $img);
}

header('Location: ../add_todo.html');
