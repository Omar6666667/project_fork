<?php


$id = $_GET['id'];



include("../connect.php");

$delete = " DELETE FROM brand WHERE id = '$id' ";
$conn->query($delete);

header("location:../../brand.php");
