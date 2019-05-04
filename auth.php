<?php
@session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['logged'])) : ?>
    <div>
        <h2>Вы авторизованы <?php echo $_SESSION['logged']; ?></h2>
        <a href="/test/logaut.php"><button>Выйти</button></a>
    </div>
<?php else : ?>
<div>
    <h3>Авторизация</h3>
</div>

<div>
    <form action="formAuth.php" method="post">
        <p>Login: <br>
            <input type="text" placeholder="Введите Login" name="login">
        </p>
        <p>Password: <br>
            <input type="password" placeholder="Введите пароль" name="password">
        </p>
        <button type="submit" name="auth">Авторизоваться</button>
    </form>
</div>
<?php endif; ?>
</body>
</html>