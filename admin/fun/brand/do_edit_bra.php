<?php

// echo "<pre>";

// print_r($_POST);
// print_r($_FILES);

include("../connect.php");


$name = $_POST['name'];


$id = $_GET['id'];



$update = "UPDATE brand SET name='$name' WHERE id ='$id'";



$conn->query($update);

header("location:../../brand.php");
