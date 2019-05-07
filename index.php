<?php
session_start();
require 'header.php';
?>

<?php if(isset($_SESSION['logged'])) : ?>
    <div class="container py-5">
        <div class="row col-auto justify-content-md-center py-5 shadow-lg">
           <div>
               <h2 >Вы авторизованы как <?= $_SESSION['logged']; ?></h2>
               <a href="/test/logaut.php"><button class="btn btn-outline-danger">Выйти</button></a>
           </div>
        </div>
    </div>
<?php else : ?>
<div class="container p-5 shadow-lg my-5">
    <div class="row">
        <div class="col-md-5 offset-md-5">
            <a href="auth.php"><h3><button class="btn btn-outline-success">Авторизация</button></h3></a>
            <a href="reg.php"><h3><button class="btn btn-outline-primary">Регистрация</button></h3></a>

        </div>
    </div>
</div>
<?php endif; ?>

</body>
</html>