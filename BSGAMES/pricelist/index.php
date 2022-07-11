<!DOCTYPE html>
<html>
<?php include("config/connect.php")?>
<?php include("head.php")?>

<body>
<?php include("D:/openserver/domains/BSGAMES/default/header.php") ?>



	<span id = "main-content"></span>
	<br id = "back"><br><br><br>
	
	<main>
        <title>Products</title>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
<!--                <th><a href = "vendor/price_sort.php">Price</a></th>-->
                <th>Price</th>
                <th>New price</th>
                <th>Genre</th>
            </tr>

        <?php
//           $products = mysqli_query($connect, "SELECT * FROM `stock`");
            $products = mysqli_query($connect, "SELECT stock.id, stock.title, stock.price, stock.newprice, comments.body
                                                     FROM stock JOIN comments
                                                     ON stock.genre_id = comments.product_id
                                                     ORDER BY stock.id ASC");

            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                ?>
            <tr>
                <td><?= $product[0]?></td>
                <td><?= $product[1]?></td>
                <td><?= $product[2]?> руб.</td>
                <td><?= $product[3]?> руб.</td>
                <td><?= $product[4]?></td>
                <td><a href = "update.php?id=<?= $product[0]?>">UPDATE</a></td>
                <td><a href = "vendor/delete.php?id=<?= $product[0]?>">DELETE</a></td>


            </tr>
            <?php
            }
        ?>
        </table>

        <form action = "vendor/create.php" method = "post">
            <p>ADD NEW PRODUCT</p>
            <p>ID</p>
            <input type = "number" name = "id">
            <p>Title</p>
            <input type = "text" name = "title">
            <p>Price</p>
            <input type = "number" name = "price">
            <p>New price</p>
            <input type = "number" name = "newprice">
            <p>Genre id <br> 0: no genre; 1: шутер; 2: Стратегия; 3: MMO</p>
            <input type = "number" name = "genre_id">
            <br>
            <br>
            <button type = "submit">Add new product</button>
        </form>


	</main>
    <?php include("D:/openserver/domains/BSGAMES/default/footer.php") ?>
</body>
</html>