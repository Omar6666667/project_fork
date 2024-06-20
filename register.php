<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];

include("admin/fun/connect.php");

$insert = "INSERT INTO login(name, password, gmail) VALUES ('$name','$password','$email')";

$conn->query($insert);

$_SESSION['login'] = $name;

header("location:home.php");
