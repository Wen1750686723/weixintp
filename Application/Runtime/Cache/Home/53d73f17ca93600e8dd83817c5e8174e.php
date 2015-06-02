<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
</head>
<body>
<div class="container">
   <table border="1" width="100%">
      <tr>
        <th width="10%">用户名称</th>
          <th width="50%">标题</th>

        <th width="10%">时间</th>
        <th width="10%">是否置顶</th>
        <th width="10%">修改</th>
        <th width="10%">删除</th>
      </tr>

      <?php
 foreach ($comment as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; echo "<th>".$value["userid"]."</th>"; echo "<th>".$value["title"]."</th>"; echo "<th>". date("Y-m-d H:i:s",$value["createtime"])."</th>"; if ($value["stick"]==1) { echo "<th><a href= \""."/yintong/index.php/Home/Article/tobottom/id/".$value["id"]."\">取消置顶</a>"."</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/Article/totop/id/".$value["id"]."\">置顶</a>"."</th>"; } echo "<th><a href= \""."/yintong/index.php/Home/Article/updateother/id/".$value["id"]."\">修改</a>"."</th>"; echo "<th><a href= \""."/yintong/index.php/Home/Article/delete/id/".$value["id"]."\">删除</a>"."</th>"; echo "</tr>"; } } ?>
    </table>
</div>
</body>
</html>