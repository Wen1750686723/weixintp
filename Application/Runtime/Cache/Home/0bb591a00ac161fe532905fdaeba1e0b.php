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
<title>控制台</title>
</head>
<body>
<div class="container">
   <table border="1" width="100%">
    	<tr>
    	  <th width="10%">用户名</th>
    	  <th width="10%">类型</th>
    	  <th width="10%">性别</th>
    	  <th width="10%">出生日期</th>
    	  <th width="10%">qq</th>
    	  <th width="10%">电话</th>
    	  <th width="10%">验证码</th>
    	  <th width="10%">操作</th>
    	</tr>
    	<?php
 foreach ($reservation as $key => $value) { echo "<tr>"; echo "<th>".$value["name"]."</th>"; echo "<th>".$value["type"]."</th>"; echo "<th>".$value["sex"]."</th>"; echo "<th>".$value["birth"]."</th>"; echo "<th>".$value["qq"]."</th>"; echo "<th>".$value["tel"]."</th>"; echo "<th>".$value["identifycode"]."</th>"; if ($value["open"]==1) { echo "<th>已开通</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/Reservation/pass/id/".$value["id"]."\">开通</a>"."</th>"; } echo "</tr>"; } ?>
    </table>
    <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($maincount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>