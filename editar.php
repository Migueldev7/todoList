<?php

$id = $_GET["userId"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
</head>

<body>
    <form action="editarsave.php" method="POST">
        <input type="text" name="taskId" value="<?php echo $_GET["taskId"]; ?>" placeholder="insira sua tarefa">
        <input type="text" name="taskEdit" value="<?php echo $_GET["taskName"]; ?>" placeholder="insira sua tarefa">
        <button>Editar</button>
    </form>
</body>

</html>