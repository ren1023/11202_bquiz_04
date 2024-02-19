
<h2 class="ct">訂單管理</h2>


<table class="all">
    <tr>
        <td class="tt ct">訂單編號</td>
        <td class="tt ct">金額</td>
        <td class="tt ct">會員帳號</td>
        <td class="tt ct">姓名</td>
        <td class="tt ct">下單時間</td>
        <td class="tt ct">操作</td>
    </tr>

    <?php
 $rows = $Order->all();
 foreach ($rows as $row) {
?>
    <tr>
        <td class="pp ct">
            <a href="?do=detail&id=<?=$row['id'];?>"><?=$row['no'];?></a>
            
        </td>
        <td class="pp ct"><?=$row['total'];?></td>
        <td class="pp ct"><?=$row['acc'];?></td>
        <td class="pp ct"><?=$row['name'];?></td>
        <td class="pp ct"><?=date('Y/m/d', strtotime($row['orderdate']));?></td>
        <td class="pp ct">
                <?php
                echo "<button onclick='del(&#39;mem&#39;,{$row['id']})'>刪除</button>";

                ?>
            </td>
    </tr>
    <?php
 }
    ?>
</table>