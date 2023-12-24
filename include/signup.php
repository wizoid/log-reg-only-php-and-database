<?php
    session_start();
    require_once 'connect.php';


    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    if ($password === $confirm_password){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
        $_SESSION['message'] = 'Вы зарегистрировались';
        header('Location: ../index.php');
    
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }
    



 ?>
