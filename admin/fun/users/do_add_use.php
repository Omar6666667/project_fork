<?php

// echo "<pre>";

// print_r($_POST);





$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pr = $_POST['pr'];






include("../connect.php");

$insert = "INSERT INTO users( username, password, email, gender, pr) VALUES ('$username','$password','$email','$gender','$pr')";

$conn->query($insert);

header("location:../../users.php");
