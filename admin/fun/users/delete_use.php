<?php


$id = $_GET['id'];



include("../connect.php");

$delete = " DELETE FROM users WHERE id = '$id' ";
$conn->query($delete);

header("location:../../users.php");
