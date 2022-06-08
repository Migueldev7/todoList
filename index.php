<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
</head>

<body>
    <form action="save.php" method="POST">
        <input type="text" name="task" placeholder="insira sua tarefa">
        <button>Adicionar Tarefa</button>
    </form>
    <?php
    $tasks = mysqli_query($conn, "SELECT * FROM task")
        or die("Falied to query database");


    while ($task = mysqli_fetch_assoc($tasks)) {
        echo '<li> <a href="delete.php?userId=' . $task["id"] . '">' . $task["name"] . '</a>
                 </li>';
    }
    ?>


</body>

</html>