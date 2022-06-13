<?php
include('database.php');

$id = $_GET["taskId"];

$query = "DELETE FROM task WHERE id = $id";
mysqli_query($conn, $query);

header('location: index.php');
