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
        <th width="10%">资金类型</th>
        <th width="10%">资金数量</th>
        <th width="10%">时间</th>
      </tr>

      <?php
 foreach ($accountdetail as $key => $value) { echo "<tr>"; echo "<th>".$value["userid"]."</th>"; if ($value["type"]==0) { echo "<th>"."减少"."</th>"; }else{ echo "<th>"."增加"."</th>"; } echo "<th>".$value["money"]."元"."</th>"; echo "<th>". date("Y-m-d H:i:s",$value["time"])."</th>"; echo "</tr>"; } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($zengsongcount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>