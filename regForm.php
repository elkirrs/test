<?php

$data = $_POST;

if (isset($data['reg']))
{
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);
    $email = htmlspecialchars(trim($_POST['email']));
    $name = htmlspecialchars(trim($_POST['userName']));

    $errors = array();

    if ($login == '')
    {
        $errors[] = 'Введите Login';
    }

    if ($password == '')
    {
        $errors[] = 'Введите пароль';
    }

    if ($email == '')
    {
        $errors[] = 'Введите Email';
    }

    if  ($name == '')
    {
        $errors[] = 'Введите имя';
    }

    if ($password != $repassword)
    {
        $errors[] = 'Повторный пароль введен не верно';
    }

    if (empty($errors))
    {

        echo "
        <div><p>" . $name . " Вы успешно зарегисрировались!</p>
</div>
        ";
        require_once 'auth.php';
    }
    else {
        echo "<div><p>" .
    array_shift($errors) . "
    </p>
</div>";
        require_once 'reg.php';
    }


}