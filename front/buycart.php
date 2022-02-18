<?php 

if(!isset($_SESSION['mem'])){
    to("?do=login");
    exit();
}

echo "你要購買的商品id 為".$_GET['id'];
echo "<hr>";
echo "數量為".$_GET['qt'];