<?php
function connectBDD(){
    // Connexion à la base de donée
    $hostname = 'mysql:dbname=todo;host=localhost';
    $user = 'root';
    $password = 'facesimplon';

    try {
        return new PDO($hostname, $user, $password);
    } catch (PDOException $e) {
        return 'Connection failed: ' . $e->getMessage();
    }
}
function insertIntoBDD($titre, $message, $img){
    $bdd = connectBDD();
    $request = $bdd->prepare('INSERT INTO list (titre, message, img, date) VALUES  (:titre, :message, :img, :date)');
    $request->execute(array(
        'titre' => $titre,
        'message' => $message,
        'img' => $img,
        'date' => time()
    ));
    return $request;
}

function selectAll(){
    $bdd = connectBDD();
    $request = $bdd->query("SELECT * FROM list");
    $data = $request->fetchAll();
    return $data;
}
function printBox(array $data){
    $box= "";
    for ($i = 0 ; $i < count($data); $i++){
        $box .= "<div class='box'>";
        $box .= "<h1>". $data[$i]['titre'] ."</h1>";
        $box .= "<img src='" . $data[$i]['img'] ."' alt='planete mauve'>";
        $box .= "<p>" . $data[$i]['message'] ."</p>";
        $box .= "</div>";
    }
    
    return $box;   
}
