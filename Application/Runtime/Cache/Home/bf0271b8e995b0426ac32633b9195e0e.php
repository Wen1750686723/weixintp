<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/pager.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
</head>
<body>
<div class="container">
   <table border="1" width="100%">
      <tr>
        <th width="10%">用户姓名</th>
        <th width="10%">提现金额</th>
        <th width="10%">日期</th>
        <th width="10%">状态</th>
      </tr>

      <?php
 foreach ($withdrow as $key => $value) { echo "<tr>"; echo "<th>".$value["userid"]."</th>"; echo "<th>".$value["money"]."元"."</th>"; echo "<th>". date("Y-m-d H:i:s",$value["time"])."</th>"; if ($value["type"]==0) { echo "<th><a href= \""."/yintong/index.php/Home/Fanance/tosuccess/id/".$value["id"]."\">提现&nbsp;&nbsp;</a><a href= \""."/yintong/index.php/Home/Fanance/tofaild/id/".$value["id"]."\">否决&nbsp;&nbsp;</a><a href= \""."/yintong/index.php/Home/Fanance/tofreeze/id/".$value["id"]."\">冻结</a>"."</th>"; }elseif ($value["type"]==1) { echo "<th>"."提现成功"."</th>"; }elseif ($value["type"]==2) { echo "<th>"."提现失败&nbsp;&nbsp;<a href= \""."/yintong/index.php/Home/Fanance/tosuccess/id/".$value["id"]."\">提现</a>"."</th>"; }elseif ($value["type"]==2) { echo "<th>"."提现冻结&nbsp;&nbsp;<a href= \""."/yintong/index.php/Home/Fanance/tosuccess/id/".$value["id"]."\">提现</a>"."</th>"; } echo "</tr>"; } ?>
    </table>
      <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($tixiancount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>