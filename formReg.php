<?php
session_start();

$data = $_POST;
$db = new DOMDocument();
$db->load('db/db.xml');
$emailUsers = $db->getElementsByTagName('email');
$loginUsers = $db->getElementsByTagName('login');



//$loginUsers = $db->getElementsByTagName('login');
//foreach ($loginUsers as $loginUser)
//{
//    var_dump($loginUser->nodeValue);
//}



//$q = $db->getElementsByTagName('User');
//foreach ($q as $a)
//{
//    var_dump($a);
//}
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


    foreach ($loginUsers as $loginUser)
    {
        if ($login == $loginUser->nodeValue)
        {
            $errors[] = 'Login уже зарегистрирован';
        }
    }


    if ($password != '')
    {
        $pass = sha1($password . '1qa2w3cd4fv5tg');
    }else{
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

    foreach ($emailUsers as $emailUser)
    {
        if ($email == $emailUser->nodeValue)
        {
            $errors[] = 'Email уже существует!';
        }
    }


    if (empty($errors))
    {

        echo "
        <div><p class='alert alert-success'><strong>" . $name . "</strong> Вы успешно зарегисрировались! <a href='auth.php'>Авторизоваться</a></p>
</div>
        ";
        require_once 'reg.php';

    require_once 'xmlData.php';
    }
    else {
        echo "<div><p class='alert alert-danger'>" .
    array_shift($errors) . "
    </p>
</div>";
        require_once 'reg.php';
    }


}
