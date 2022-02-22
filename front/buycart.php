<?php 
// 如果有點擊 送出id&商品數量
if(isset($_GET['id']) && isset($_GET['qt'])){
    // 存在session叫做cart的地方 二維陣列
    // $_SESSION['cart']=[]
    // [id 5 => 買2個]
    // .....]
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];

}

// 判斷是否登入
if(!isset($_SESSION['mem'])){
    to("?do=login");
    exit();
    // exit 不顯示後面內容
}


// 如果購物車是空的
if(empty($_SESSION['cart'])){
    echo "<h1 class='ct'>購物車中無商品</h1>";
}else{
    // 如果不是空的就印出存在session的cart陣列的東西
    ?>
    <!-- h1.ct -->
    <h1 class="ct"><?=$_SESSION['mem'];?></h1>
    <!-- table.all>tr.tt.ct+tr.pp.ct -->
    <table class="all">
        <tr class="tt ct">
            <td>編號</td>
            <td>商品名稱</td>
            <td>數量</td>
            <td>庫存量</td>
            <td>單價</td>
            <td>小計</td>
            <td>刪除</td>
        </tr>
        <?php
        foreach($_SESSION['cart'] as $id => $qt){
            $item=$Goods->find($id);
        ?>
        <tr class="pp ct">
            <td><?=$item['no'];?></td>
            <td><?=$item['name'];?></td>
            <td><?=$qt;?></td>
            <td><?=$item['stock'];?></td>
            <td><?=$item['price'];?></td>
            <td><?=$item['price']*$qt;?></td>
            <td>
                <img src="icon/0415.jpg" onclick="delCart(<?=$id;?>)">
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
<div class="ct">
    <img src="icon/0411.jpg" onclick="location.href=index.php">&nbsp;&nbsp;
    <img src="icon/0412.jpg" onclick="location.href='?do=checkout'">
</div>
<?php
    
}
?>

<script>
    function delCart(dom,id){
        $.post("api/del_cart.php")
    }
</script>

