<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }

?>
<!DOCTYPE html>
<html>
<?php include("D:/openserver/domains/BSGAMES/pricelist/head.php") ?>
<body>
<?php include("D:/openserver/domains/BSGAMES/default/header.php") ?>


<span id = "main-content"></span>
<br id = "back"><br><br><br>

<form action="vendor/registration.php" method="post">
    <p>Почта</p>
    <input type="text" placeholder="Введите свою почту" name="email">
    <p>Логин</p>
    <input type="text" placeholder="Придумайте свой логин" name="login">
    <p>Пароль</p>
    <input type="password" placeholder="Придумайте свой пароль " name="password">
    <p>Подтвердите пароль</p>
    <input type="password" placeholder="Подтвердите свой пароль" name="password_confirm">
    <?php
    if ($_SESSION['message']) {
        echo '<p class = "msg">' .$_SESSION['message']. '</p>';
    }
    unset($_SESSION['message']);
    ?>
    <p></p>
    <button type="submit">Регистрация</button>
    <p>Уже есть аккаунт? <a href="index.php">Вход</a></p>


</form>
<?php include("D:/openserver/domains/BSGAMES/default/footer.php") ?>
</body>
</html>