<?php
include ("../config/connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$newprice = $_POST['newprice'];
$genre_id = $_POST['genre_id'];

//mysqli_query($connect, query: "INSERT INTO `stock` (`id`, `title`, `price`, `newprice`,) VALUES ('$id', '$title', '$price', '$newprice')");
mysqli_query($connect, "INSERT INTO `stock` (`id`, `title`, `price`, `newprice`, `genre_id`) VALUES ('$id', '$title', '$price', '$newprice', '$genre_id')");

header('Location: ../index.php');