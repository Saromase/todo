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
                <li><a href="display_todo.php">Mes Todos</a></li>
                <li class="active"><a href="add_todo.php">Ajouter une Todo</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <form method="post" action="todo_add.php">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="object">Objet :</label>
                <input type="text" class="form-control" id="object" name="object">
            </div>
            <div class="form-group">
                <label for="deadline">DeadLine</label>
                <input type="date" class="form-control" id="deadline" name="deadline">
            </div>
            <button type="submit" class="btn btn-default">Ajouter</button>
        </form>
    </div>
</body>

</html>
