<?php
$goods=$Goods->find($_GET['id']);
?>
<style>
    .item {
        /* width: 80%; */
        height: 160px;
        background-color: #F4C591;
        margin: 5px auto;
        display: flex;
    }

    .item .img {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #999;
        /* border-right:0px; */

    }

    .item .info {
        width: 40%;
        display: flex;
        flex-direction: column;

    }

    .info div {
        border: 1px solid #999;
        border-left: 0px;
        border-top: 0px;
        flex-grow: 1;
    }

    .info div:nth-child(1) {
        border: 1px solid #999;
    }
</style>

<h2 class="ct"><?= $goods['name']; ?></h2>

<div class="item">
    <div class="img">
        <a href="?do=detail&id=<?= $goods['id']; ?>">
            <img src="./img/<?= $goods['img']; ?>" style="width:80%;height:150px">
        </a>
    </div>
    <div class="info">
        <div>分類：<?=$Type->find($goods['big'])['name'];?> > <?=$Type->find($goods['mid'])['name'];?></div>
        <div>編號：<?= $goods['no']; ?></div>
        <div>價錢：<?= $goods['price']; ?></div>
        <div>詳細說明：<?= $goods['price']; ?></div>
        <div>庫存量<?= $goods['stock']; ?></div>
    </div>
</div>

<div class="tt ct">
    購買數量：
    <input type="number" id="qt" value="1" style="width:50px">
    <img src="./icon/0402.jpg" onclick="buy()">
</div>
<script>
    function buy(){
        let id=<?=$_GET['id'];?>;
        let qt=$("#qt").val()
        location.href=`?do=buycart&id=${id}&qt=${qt}`
    }
</script>