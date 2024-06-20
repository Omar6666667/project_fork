<?php

// echo "<pre>";

// print_r($_POST);

$name = $_POST['name'];


include("../connect.php");

$insert = "INSERT INTO brand( name ) VALUES ('$name')";

$conn->query($insert);

header("location:../../brand.php");
