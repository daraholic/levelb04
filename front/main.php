<?php
// 印出導覽列文字
$type=$_GET['type']??0;
if($type==0){
  $nav="全部商品";
  $rows=$Goods->all(['sh'=>1]);
}else{
  $t=$Type->find($type);
  // 大分類'parent'=0
  if($t['parent']==0){
    $nav=$t['name'];
    $rows=$Goods->all(['sh'=>1,'big'=>$type]);

  }else{
    $b=$Type->find($t['parent']);
    $nav=$b['name'] . " > " . $t['name'];
    $rows=$Goods->all(['sh'=>1,'mid'=>$type]);
  }
}

?>
<h1><?=$nav;?></h1>

<!-- table有點麻煩 用div比較簡單 -->
<?php
foreach($rows as $row){
?>

<!-- // div.all>div*2 -->
<div class="all" style="display:flex;justify-content:center;height:170px">
    <div class="pp ct" style="padding:20px;width:40%">
        <a href='?do=detail&id=<?=$row['id'];?>'><img src="img/<?=$row['img'];?>" style="width:100%;height:100%"></a>
    </div>
    <div style="width:60%" class="pp">
        <div class="tt ct"><?=$row['name'];?></div>
        <div>
            價錢:<?=$row['price'];?>
            <a href='?do=buycart&id=<?=$row['id'];?>&qt=1' style="float:right"><img src="icon/0402.jpg" alt=""></a>
        </div>
        <div>規格:<?=$row['spec'];?></div>
        <div>簡介:<?=mb_substr($row['intro'],0,20);?>...</div>
    </div>
</div>

<?php
}
?>