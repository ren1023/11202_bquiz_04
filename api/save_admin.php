<?php
include_once "db.php";
$_POST['pr']=serialize($_POST['pr']);//將陣列的資料，轉成字串存入資料庫
$Admin->save($_POST);//資料存到資料庫
to("../back.php?do=admin");//轉到管理者頁面