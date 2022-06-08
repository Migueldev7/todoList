<?php

include('database.php');

$task = $_POST['task'];


$query = "INSERT INTO `task`(`name`) VALUES ('$task')";

mysqli_query($conn, $query);

header('location: index.php');
