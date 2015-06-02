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
   <h1>添加品种</h1>
   <form action="/yintong/index.php/Home/Platform/goodstype" method="post">
   <table border="1" width="100%">
     <tr>
       <th width="50%"><div class="fig">品种名称:</div><input type="text" name="type"/></th>
       <th></th>
     </tr>
      <tr>   
       <td></td>
       <td><input type="submit" value="确定" /></td>
     </tr>
   </table>
   
   
   </form>
   <table border="1" width="100%">
      <tr>
    	  <th width="10%">品种名称</th>
    	  <th width="10%">删除</th>
      </tr>
      <?php
 foreach ($type as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; echo "<th>".$value["text"]."</th>"; echo "<th><a href= \""."/yintong/index.php/Home/Platform/deletetype/id/".$value["id"]."\">删除</a>"."</th>"; echo "</tr>"; } } ?>

   </table>
       <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($typecount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>