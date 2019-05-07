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
        <form action="formAuth.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
            <label for="inputEmail" class="sr-only">Login</label>
            <input type="text" id="inputEmail" class="form-control my-2" placeholder="Login" name="login">
            <label for="inputPassword" class="sr-only my-2">Password</label>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" name="password">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="auth">Авторизация</button>
        </form>
        </body>
    </div>
</div>

<?php endif; ?>
</body>
</html>