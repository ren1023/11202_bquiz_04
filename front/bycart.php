<?php
echo "test";
if(!isset($_SESSION['mem'])){//如果session不存在時，就回到login這個頁！
    to("?do=login");
}
?>