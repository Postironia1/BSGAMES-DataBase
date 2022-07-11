<?php

    session_start();
    require_once ("connect.php");


    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $login = $_POST['login'];

    if ($password == $password_confirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users`(`id`, `email`, `login`, `password`) VALUES (NULL,'$email','$login','$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');


    }
    else {

        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');

    }
