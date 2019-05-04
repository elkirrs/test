<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-05-04
 * Time: 17:47
 */

session_start();
unset($_SESSION['logged']);
header('location: /test/');