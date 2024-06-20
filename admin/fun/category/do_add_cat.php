<?php

// echo "<pre>";

// print_r($_POST);

$name = $_POST['name'];


include("../connect.php");

$insert = "INSERT INTO category( name ) VALUES ('$name')";

$conn->query($insert);

header("location:../../category.php");
