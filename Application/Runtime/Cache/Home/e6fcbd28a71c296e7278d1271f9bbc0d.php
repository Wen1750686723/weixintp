<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/run.css" />
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.manager.js"></script>
<title>控制台</title>
</head>
<body>
   <div class="container">
   	<form action="/thinkphp_3.2.3_full/index.php/Home/Look/looktest" method="post">
	<select name="subject">
    <?php
 foreach ($subject as $key => $value) { echo "<option value=\"".$value["id"]."\">".$value["subjectname"]."</option>"; } ?>
	</select><br>
	<input type="submit">
	</form>
	<table border="1">
	<tr>
	<th width="10%">id</th>
	<th width="10%">测试名称</th>
	<th width="10%">所属科目</th>
	<th width="10%">创建时间</th>
	<th width="10%">创建人</th>
	<th width="60%">简介</th>
	</tr>
	<?php
 foreach ($test as $key => $value) { echo "<tr>"; echo "<th>".$value["id"]."</th>"; echo "<th>".$value["subjectid"]."</th>"; echo "<th>".$value["testname"]."</th>"; echo "<th>".date("Y-m-d h:i:s",$value["date"])."</th>"; echo "<th>".$value["creatorid"]."</th>"; echo "<th>".$value["text"]."</th>"; echo "</tr>"; } ?>
	</table>
   </div>
   
</body>
</html>