<?php
include('database.php');

$id = $_GET["userId"];

$query = "DELETE FROM task WHERE id = $id";
mysqli_query($conn, $query);

header('location: index.php');
