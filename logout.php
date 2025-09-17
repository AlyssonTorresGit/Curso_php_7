<?php
session_start();
session_destroy();
unset($_COOKIE['USUARIO']);
setcookie('usuario', '');

header('Location: login.php');
