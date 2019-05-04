<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-05-04
 * Time: 11:30
 */
session_start();
$data = $_POST;
$db = new DOMDocument();
$db->load('db/db.xml');
$loginUsers = $db->getElementsByTagName('login');
$pass = $db->getElementsByTagName('password');



$xml = simplexml_load_file('db/db.xml');
$users = json_decode(json_encode($xml), true);


if (isset($data['auth']))
{
    $loginAuth = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars($_POST['password']);
    $errors = array();

    $index = array();
    foreach ($users as $value) {
        foreach ($value as $item => $user) {
            $index[$user['login']] = $item;
        }
        @$key = $index["$loginAuth"];
    }

    if (@$users['User']["$key"]['login'] == $loginAuth)
    {
        if ($users['User']["$key"]['password'] == $password)
        {
            $_SESSION['logged'] = $loginAuth;

            echo "
        <div><p><strong>" . $_SESSION['logged'] . "</strong> Вы успешно авторизовались! <a href='/test'>Перейти на главную страницу</a></p>
</div>
        ";

        }else{
            $errors[] = 'Невверно введен логин или пароль';
        }
    }
    else{
        $errors[] = 'Login не зарегистрирован';
    }



    if (empty($errors))
    {

    }
    else {
        echo "<div><p>" .
            array_shift($errors) . "
    </p>
</div>";
        require_once 'auth.php';
    }

}