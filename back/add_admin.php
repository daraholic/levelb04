<h1 class="ct">新增管理帳號</h1>
<table>
  <tr>
    <td class="tt ct">帳號</td>
    <td class="pp"><input type="text"></td>
  </tr>
  <tr>
    <td class="tt ct">密碼</td>
    <td class="pp"><input type="password"></td>
  </tr>
  <tr>
    <td class="tt ct">權限</td>
    <td class="pp"><input type="text"></td>
    
  </tr>
</table>
<div class="ct">
  <button onclick="addAdmin()">新增</button>
  <button onclick="reset()">重置</button>
</div>
<script>
  function reset(){
    $("#acc,#pw").val("")
    $("input[type='checkbox]").prop('checked',fause)
  }
  function addAdmin(){

  }
</script>