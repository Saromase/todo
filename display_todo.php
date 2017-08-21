<?php
include 'function.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Todo List</title>
        <meta charset="utf-8">
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Todo List</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li class="active"><a href="display_todo.php">Mes Todos</a></li>
                    <li><a href="add_todo.php">Ajouter une Todo</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Todo List</h2>
            <p>All todo is here !</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Titre</th>
                        <th>Objet</th>
                        <th>Date de création</th>
                        <th>DeadLine</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $bdd = connectToDb();
                    $reponse = $bdd->query('SELECT * FROM todo');
                    while ($donnees = $reponse->fetch()){ ?>
                        <tr>
                            <td>
                                <?php echo $donnees['ID'];?>
                            </td>
                            <td>
                                <?php echo $donnees['titre'];?>
                            </td>
                            <td>
                                <?php echo $donnees['objet'];?>
                            </td>
                            <td>
                                <?php echo $donnees['day_add'];?>
                            </td>
                            <td>
                                <?php echo $donnees['deadline'];?>
                            </td>
                        </tr>
                        <?php   } 
                    $reponse->closeCursor(); ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>
