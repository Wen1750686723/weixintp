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
</head>
<body>
<div class="container">
   <table border="1" width="100%">
      <tr>
        <th width="10%">用户姓名</th>
        <th width="50%">用户类别</th>

        <th width="10%">创建时间</th>
        <th width="10%">性别</th>
        <th width="10%">开户平台</th>
        <th width="10%">是否冻结</th>

      </tr>

      <?php
 foreach ($user as $key => $value) { if($value["is_delete"]!=1) { echo "<tr>"; echo "<th>".$value["name"]."</th>"; if ($value["authority"]==0) { echo "<th>"."普通会员"."</th>"; }elseif ($value["authority"]==1) { echo "<th>"."分析师"."</th>"; }else{ echo "<th>"."管理员"."</th>"; } echo "<th>". date("Y-m-d H:i:s",$value["createtime"])."</th>"; echo "<th>".$value["sex"]."</th>"; foreach ($returnfeeplatform as $key1 => $value1) { if ($value["plateform"]==null) { echo "<th>"."</th>"; break; } if ($value["plateform"]==$value1["id"]) { echo "<th>".$value1["name"]."</th>"; break; } } if ($value["freeze"]==1) { echo "<th><a href= \""."/yintong/index.php/home/site/tofreezed/id/".$value["id"]."\">账户解冻</a>"."</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/home/site/tofreeze/id/".$value["id"]."\">账户冻结</a>"."</th>"; } echo "</tr>"; } } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($usercount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>