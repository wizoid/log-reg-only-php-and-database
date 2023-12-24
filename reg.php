<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<form action="include/signup.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login" placeholder="Придумайте логин">

        <label for="">Passwod</label>
        <input type="password" name="password" placeholder="Придумайте пароль">

        <label for="">Confirmation Password</label>
        <input type="password" name="confirm_password" placeholder="Подтвердите пароль">

        <label for="">Mail</label>
        <input type="email" name="email" placeholder="Input email">

        <button>Зарегистрироваться</button>

        <p>
        you have an account - <a href="index.php">entrance</a>
        </p>

        <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
                unset($_SESSION['message']);
        ?>

</form>

</body>
</html>