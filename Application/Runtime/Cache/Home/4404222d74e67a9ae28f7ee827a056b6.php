<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/pager.css" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
<style>
  .img{
    width:10px;
    height: 10px;
  }
</style>
</head>
<body>
<div class="container">
   <table border="1" width="100%">
      <tr>
        <th width="5%">用户姓名</th>
        <th width="5%">用户类别</th>

        <th width="20%">身份证号</th>
        <th width="10%">身份证图片</th>
        <th width="20%">银行卡号</th>
        <th width="10%">银行卡开户银行</th>
        <th width="10%">银行卡图片</th>
        <th width="10%">真实姓名</th>
        <th width="10%">头像</th>
      </tr>

      <?php
 foreach ($userdetail as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; foreach ($user as $key1 => $value1) { if ($value["userid"]==$value1["id"]) { echo "<th>".$value1["name"]."</th>"; if ($value1["authority"]==0) { echo "<th>"."普通会员"."</th>"; }elseif ($value1["authority"]==1) { echo "<th>"."分析师"."</th>"; }else{ echo "<th>"."管理员"."</th>"; } } } echo "<th>".$value["identification"]."</th>"; echo "<th>"."<img class=\"img\" src=\"".$value["identificationhref"]."\"/>"."</th>"; echo "<th>".$value["cardnumber"]."</th>"; echo "<th>".$value["openbank"]."</th>"; echo "<th>"."<img class=\"img\" src=\"".$value["bankimg"]."\"/>"."</th>"; echo "<th>".$value["truename"]."</th>"; echo "<th>"."<img class=\"img\" src=\"".$value["imghref"]."\"/>"."</th>"; echo "</tr>"; } } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($userdetailcount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>