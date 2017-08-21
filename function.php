<?php

function connectToDb(){
    try{
        return new PDO('mysql:host=localhost;dbname=todo;charset=utf8', 'root', 'facesimplon');
    }
    catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
    }
}