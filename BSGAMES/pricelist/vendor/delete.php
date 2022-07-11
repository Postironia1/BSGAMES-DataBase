<?php
include ("../config/connect.php");



$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `stock` WHERE `id` = '$id'");

header('Location: /pricelist/index.php');