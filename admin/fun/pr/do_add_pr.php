<?php

// echo "<pre>";

// print_r($_POST);

$name = $_POST['name'];


include("../connect.php");

$insert = "INSERT INTO pr( name ) VALUES ('$name')";

$conn->query($insert);

header("location:../../pr.php");
