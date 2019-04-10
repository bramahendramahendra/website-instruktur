<?php

include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM instruktur WHERE id_instruktur = $id";
$query = mysqli_query($db,$sql);

header("Location:index-admin.php");

?>