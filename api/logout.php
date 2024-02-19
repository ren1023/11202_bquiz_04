<?php
session_start();

unset($_SESSION['mem'],$_SESSION['admin']);

if(isset($_SESSION['cart'])){//當登出時，就刪除購車的session(此功能要符合當時需求)
    unset($_SESSION['cart']);
}

header('location:../index.php');
