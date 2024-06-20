<?php

// echo "<pre>";

// print_r($_POST);
// print_r($_FILES);

include("../connect.php");


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pr = $_POST['pr'];

$id = $_GET['id'];



$update = "UPDATE  users SET username='$username',password='$password',gender='$gender',pr='$pr',email='$email' WHERE id ='$id'";


$conn->query($update);

header("location:../../users.php");
