<?php include("config/connect.php"); ?>

<?php
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `stock` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html>


<?php include("head.php")?>
<body>
<?php include("D:/openserver/domains/BSGAMES/default/header.php") ?>



<span id = "main-content"></span>
<br id = "back"><br><br><br>

<main>
    <title>Update Product</title>

    <h3>UPDATE PRODUCT</h3>
    <form action = "vendor/update.php" method = "post">

        <input type = "hidden" name = "id" value="<?= $product['id'] ?>">
        <p>Title</p>
        <input type = "text" name = "title" value="<?= $product['title'] ?>">
        <p>Price</p>
        <input type = "number" name = "price" value="<?= $product['price'] ?>">
        <p>New price</p>
        <input type = "number" name = "newprice" value="<?= $product['newprice'] ?>">
        <p>New Genre id</p>
        <input type = "number" name = "genre_id" value="<?= $product['genre_id'] ?>">
        <br>
        <br>
        <button type = "submit">Update product</button>
    </form>


</main>
<?php include("D:/openserver/domains/BSGAMES/default/footer.php") ?>
</body>
</html>