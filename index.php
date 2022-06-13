<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo</title>
</head>

<body>
    <div class="caixa">

        <form action="save.php" method="POST">
            <input type="text" id="input" name="task" placeholder="insira sua tarefa"><button>enviar</button>
        </form>
        <?php
        $tarefas = mysqli_query($conn, "SELECT * FROM task")
            or die("Falied to query database");
        while ($tarefa = mysqli_fetch_assoc($tarefas)) {
            echo '<li> <p> ' . $tarefa['name'] . '</p>  <a href="delete.php?taskId=' . $tarefa["id"] . '">Excluir</a>
       
        <form method="post" action="editar.php?taskName=' . $tarefa["name"] . '&taskId=' . $tarefa["id"] . '">
        <button type="submit">editar</button>
        </form>
        </li>';
        }
        ?>


    </div>
</body>

</html>