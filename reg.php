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
        <input type="text" name="confirm_password" placeholder="Подтвердите пароль">

        <label for="">Mail</label>
        <input type="email" name="email" placeholder="Input email">

        <button>Войти</button>

        <p>
        you have an account - <a href="index.php">entrance</a>
        </p>


    </form>
</body>
</html>