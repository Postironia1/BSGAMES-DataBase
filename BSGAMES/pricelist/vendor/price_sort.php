<?php
include ("../config/connect.php");





mysqli_query($connect, "SELECT stock.id, stock.title, stock.price, stock.newprice, comments.body
                                                     FROM stock JOIN comments
                                                     ON stock.genre_id = comments.product_id
                                                     ORDER BY stock.id DESC");

header('Location: /pricelist/index.php');