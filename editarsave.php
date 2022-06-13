<?php

include('database.php');
$name = $_POST['taskEdit'];
$id = $_POST['taskId'];
$query = "UPDATE `task` SET `name`='$name' WHERE id =  $id";

mysqli_query($conn, $query);

header('location: index.php');
