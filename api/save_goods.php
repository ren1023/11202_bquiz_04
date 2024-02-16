<?php include_once "db.php";


if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/{$_FILES['img']['name']}");
}

if(!isset($_POST['id'])){ //沒有id的欄位，表示是新增商品功能，修改商品功能不執行
    $_POST['no']=rand(100000,999999);
    $_POST['sh']=1;
}


$Goods->save($_POST);
to("../back.php?do=th");


