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

<form action="vendor/signin.php" method="post">
    <p>Логин</p>
    <input type="text" name="login" placeholder="Введите свой логин">
    <p>Пароль</p>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <p></p>
    <button type="submit">Войти</button>

    <p>Нет аккаунта? <a href="register.php">Регистрация</a></p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class = "msg">' .$_SESSION['message']. '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
<?php include("D:/openserver/domains/BSGAMES/default/footer.php") ?>
</body>
</html>