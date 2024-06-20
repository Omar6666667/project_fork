<?php


$id = $_GET['id'];



include("../connect.php");

$delete = " DELETE FROM pr WHERE id = '$id' ";
$conn->query($delete);

header("location:../../pr.php");
