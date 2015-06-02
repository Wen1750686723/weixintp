<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/pager.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
<link rel="stylesheet" href="/yintong/Public/kindeditor/themes/default/default.css" />
<script src="/yintong/Public/kindeditor/kindeditor-min.js"></script>
<script src="/yintong/Public/kindeditor/lang/zh_CN.js"></script>

<script language="javascript">
   KindEditor.ready(function(K) {
        var editor = K.editor({
          allowFileManager : true
        });
        K('#image3').click(function() {
          editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
              showRemote : false,
              imageUrl : K('#url3').val(),
              clickFn : function(url, title, width, height, border, align) {
                K('#url3').val(url);
                editor.hideDialog();
              }
            });
          });
        });
      });

</script>
<title>控制台</title>
<style>
  .fig{
    float: left;
    width: 100px;
  }
  .input{
    float: left;
  }
  .img{
    width: 20px;
    height: 20px;
  }
</style>
</head>
<body>
<div class="container">
   <h1>添加返佣平台</h1>
   <form action="/yintong/index.php/Home/Platform/index" method="post">
   <table border="1" width="100%">
     <tr>
       <td><div class="fig">名称:</div><input type="text" name="client"/></td>
       <td><div class="fig">返现点数:</div><input type="text" name="return"/></td>
     </tr>
     <tr>
       <td><div class="fig">返现周期：</div><input type="text" name="circle"/></td>
       <td><div class="fig">杠杆：</div> <input type="text" name="heaver"/></td>
     </tr>
     <tr>
       <td><div class="fig">门槛：</div><input type="text" name="strip"/></td>
       <td> <div class="fig">银行：</div><input type="text" name="bank" /></td>
     </tr>
     <tr>
       <td><div class="fig">软件下载地址：</div><input type="text" name="software"/></td>
       <td><div class="fig">详细情况：</div><input type="text" name="detail"/></td>
     </tr>
     <tr>
       <td><input type="text" name="img" id="url3" value="" /> <input type="button" id="image3" value="选择图片" /></td>
       <td><div class="fig">是否置顶：</div><input type="radio" name="top" value="1" />置顶&nbsp;&nbsp;<input type="radio" name="top" value="0" />不置顶</td>
       
     </tr>
     <tr>   
       <td></td>
       <td><input type="submit" value="确定" /></td>
     </tr>
   </table>
   
   
   </form>
   <table border="1" width="100%">
    	<tr>
    	  <th width="10%">名称</th>
        <th width="5%">图片所存地址</th>
    	  <th width="20%">返现点数</th>
    	  <th width="10%">返现周期</th>
    	  <th width="10%">杠杆</th>
    	  <th width="10%">门槛</th> 
    	  <th width="10%">银行</th>
    	  <th width="10%">软件下载地址</th>
        <th width="10%">详细情况</th>
        <th width="10%">是否置顶</th>
    	  <th width="10%">修改</th>
    	  <th width="10%">删除</th>
    	</tr>

    	<?php
 foreach ($platform as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; echo "<th>".$value["name"]."</th>"; echo "<th>"."<img class=\"img\" src=\"".$value["img"]."\" alt=\"\" />"."</th>"; echo "<th>".$value["return"]."</th>"; echo "<th>".$value["circle"]."</th>"; echo "<th>".$value["heaver"]."</th>"; echo "<th>".$value["strip"]."</th>"; echo "<th>".$value["bank"]."</th>"; echo "<th>".$value["software"]."</th>"; echo "<th>".$value["detail"]."</th>"; if ($value["is_top"]==1) { echo "<th><a href= \""."/yintong/index.php/Home/Platform/tobottom/id/".$value["id"]."\">取消置顶</a>"."</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/Platform/totop/id/".$value["id"]."\">置顶</a>"."</th>"; } echo "<th><a href= \""."/yintong/index.php/Home/Platform/update/id/".$value["id"]."\">修改</a>"."</th>"; echo "<th><a href= \""."/yintong/index.php/Home/Platform/delete/id/".$value["id"]."\">删除</a>"."</th>"; echo "</tr>"; } } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($platformcount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>