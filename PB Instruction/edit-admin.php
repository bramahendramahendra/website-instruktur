<?php
// include database connection file
include_once("config.php");

$id = $_GET['id'];

$nama_instruktur = $_POST["nama_instruktur"];

$sql = "UPDATE instruktur SET nama_instruktur='$nama_instruktur' WHERE id_instruktur=$id";
$query = mysqli_query($db,$sql);


header("Location:index-admin.php");
?>