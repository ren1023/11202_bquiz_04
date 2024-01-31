<?php include_once 'db.php';


if(!isset($_POST['id'])){
    $_POST['regdate']=date("Y-m-d");//沒有id就存註冊日期
}
$Mem->save($_POST); //有id，就直接存檔

if(isset($_POST['id'])){
   to('../back.php?do=mem');
}

?>