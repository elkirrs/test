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

<div>
    <h3>Регистрация</h3>
</div>

<div>
    <form action="regForm.php" method="POST">
        <p>Login: <br>
            <input type="text" name="login" placeholder="Введите логин">
        </p>
        <p>Password: <br>
            <input type="password" name="password" placeholder="Задайте пароль" >
        </p>
        <p>RePassword: <br>
            <input type="password" name="repassword" placeholder="Повторите пароль" >
        </p>
        <p>Email <br>
            <input type="email" name="email" placeholder="Укажите Вашу почту" >
        </p>
        <p>Name <br>
            <input type="text" name="userName" placeholder="Введитете Ваше имя" >
        </p>
        <button type="submit" name="reg">Зарегистрироваться</button>
    </form>
</div>


</body>
</html>