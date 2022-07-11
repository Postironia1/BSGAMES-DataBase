<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<?php include("D:/openserver/domains/BSGAMES/pricelist/head.php") ?>
<body>
<?php include("D:/openserver/domains/BSGAMES/default/header.php") ?>


<span id = "main-content"></span>
<br id = "back"><br><br><br>

<form>

    <h2><?= $_SESSION['user']['email']?></h2>
    <h2><?= $_SESSION['user']['login']?></h2>

</form>
<?php include("D:/openserver/domains/BSGAMES/default/footer.php") ?>
</body>
</html>