<?php
// echo "test";
if(isset($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}
if(!isset($_SESSION['mem'])){//如果session不存在時，就回到login這個頁！
    to("?do=login");
}

echo "<h2 class='ct'>{$_SESSION['mem']} 的購物車</h2>";


if(!isset($_SESSION['cart'])){

    echo "<h2 class='ct'>購物車中尚無商品<h2>";
}else{

    dd($_SESSION['cart']);
}




?>