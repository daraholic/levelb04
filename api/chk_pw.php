<?php include_once "../base.php";

$db = new DB($_POST['table']);
$chk = $db->math('count', '*', ['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($chk) {
    echo 1;
    switch ($_POST['table']) {
        case "admin":
            $_SESSION['admin'] = $_POST['acc'];
            break;
        case "member":
            $_SESSION['admin'] = $_POST['acc'];
    }
} else {
    echo 0;
}

// 快速解
// echo $Mem->math('count','*',['acc'=>$_POST['acc']]);