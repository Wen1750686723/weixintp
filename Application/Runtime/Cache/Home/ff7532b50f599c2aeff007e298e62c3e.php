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
        <th width="10%">分析师姓名</th>
        <th width="10%">分析师头像</th>
        <th width="10%">所有盈利点数</th>
        <th width="10%">上个月盈利点数</th>
        <th width="10%">上个月成功率</th>
        <th width="10%">总喊单数</th>
        <th width="10%">成功单数</th>
        <th width="10%">订阅人数</th>
        <th width="10%">创建时间</th>
        <th width="10%">认证</th>

      </tr>

      <?php
 foreach ($analyst as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; foreach ($user as $key1 => $value1) { if ($value["analystid"]==$value1["id"]) { echo "<th>".$value1["name"]."</th>"; } } echo "<th>"."<img class=\"img\" src=\"".$value["img"]."\"/>"."</th>"; echo "<th>". date("Y-m-d H:i:s",$value["createtime"])."</th>"; echo "<th>".$value["allprofitfee"]."</th>"; echo "<th>".$value["lastmonthfee"]."</th>"; echo "<th>".$value["successrate"]."</th>"; echo "<th>".$value["totalshout"]."</th>"; echo "<th>".$value["sucessshout"]."</th>"; echo "<th>".$value["subscription"]."</th>"; if ($value["register"]!=1) { echo "<th><a href= \""."/yintong/index.php/Home/User/toregister/id/".$value["id"]."\">认证通过</a>"."</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/User/toregisterd/id/".$value["id"]."\">取消认证</a>"."</th>"; } echo "</tr>"; } } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($analystcount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>