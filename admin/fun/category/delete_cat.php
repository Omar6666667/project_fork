<?php


$id = $_GET['id'];



include("../connect.php");

$delete = " DELETE FROM category WHERE id = '$id' ";
$conn->query($delete);

header("location:../../category.php");
