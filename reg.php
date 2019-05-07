<?php
@session_start();
require_once 'header.php';

if(isset($_SESSION['logged'])) : ?>
    <div>
        <h2>Вы авторизованы <?php echo $_SESSION['logged']; ?></h2>
        <a href="/test/logaut.php"><button>Выйти</button></a>
    </div>
<?php else : ?>

<div class="container ">
    <div class="row justify-content-center">
        <body class="text-center">
        <form class="p-1 my-1" action="formReg.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
            <label for="inputEmail" class="sr-only">Login</label>
            <input type="text" id="inputEmail" class="form-control my-2" placeholder="Login" name="login">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" name="password">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" name="repassword">

            <input type="text" id="inputEmail" class="form-control my-2" placeholder="Email" name="email">
            <label for="inputPassword" class="sr-only">email</label>

            <input type="text" id="inputEmail" class="form-control my-2" placeholder="Name" name="userName">
            <label for="inputPassword" class="sr-only">Name</label>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg">Регистрация</button>
        </form>
        </body>
    </div>
</div>
<?php endif; ?>
</body>
</html>