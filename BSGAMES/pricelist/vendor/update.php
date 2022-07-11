<?php
include ("../config/connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$newprice = $_POST['newprice'];
$genre_id = $_POST['genre_id'];

mysqli_query($connect, "UPDATE `stock` SET `id`='$id',`title`='$title',`price`='$price',`newprice`='$newprice',`genre_id`='$genre_id' WHERE `stock`.`id` = '$id'");

header('Location: /pricelist/index.php');