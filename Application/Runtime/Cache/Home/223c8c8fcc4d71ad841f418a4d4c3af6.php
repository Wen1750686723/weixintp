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
        <th width="10%">问题人</th>
        <th width="30%">问题</th>
        <th width="10%">时间</th>
        <th width="10%">答题人</th>
        <th width="30%">答案</th>
        <th width="10%">时间</th>
      </tr>

      <?php
 foreach ($question as $key => $value) { echo "<tr>"; if ($value["isdelete"]!=1) { echo "<th>".$value["userid"]."</th>"; echo "<th>".$value["question"]."</th>"; echo "<th>". date("Y-m-d H:i:s",$value["create_time"])."</th>"; if ($value["is_answer"]==1) { foreach ($answer as $key1 => $value1) { if ($value1["questionid"]==$value["id"]) { echo "<th>".$value1["userid"]."</th>"; echo "<th>".$value1["text"]."</th>"; echo "<th>".date("Y-m-d H:i:s",$value1["create_time"])."</th>"; break; } } } } echo "</tr>"; } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($questioncount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>