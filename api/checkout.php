<? include_once "../base.php";

$_POST['no']=date("Ymd").rand(100000,99999);
// 訂單編號 不可重複
while(!empty($Ord->find(['no'=>$_POST['no']]))){
  $_POST['no']=date("Ymd").rand(100000,99999);
};

$_POST['goods']=serialize($_SESSION['cart']);
$Ord->save($_POST);

//  user結帳完畢 需清空購物車 
unset($_SESSION['cart']);
?>