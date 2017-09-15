<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Appli Pourri</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab:700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/function.js"></script>
</head>

<body>
    <header>
        <h1>Appli Pourri</h1>
        <h1><a href="add_todo.html">Ajouter une box</a></h1>
    </header>
    <section id="container">
        <?php
            include 'php/function.php';
            $todo = selectAll();
            echo printBox($todo);
        ?>
    </section>
</body>

</html>
