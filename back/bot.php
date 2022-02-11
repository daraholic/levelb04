<h1 class="ct">編輯頁尾版權區</h1>
<?php
if(isset($_POST['bottom'])){
    $Bot->save(['id'=>1,
                'bottom'=>$_POST['bottom']]);
}
?>
<form action="?do=bot" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp"><input type="text" name="bot"></td>
        </tr>
    </table>
</form>