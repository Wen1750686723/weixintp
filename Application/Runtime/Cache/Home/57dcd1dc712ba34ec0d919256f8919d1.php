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
<title>控制台</title>
</head>
<body>
<div class="container">
   <table border="1">
	<tr>
	  <th width="10%">运行环境</th>
	  <th width="40%"><?php echo php_sapi_name(); ?></th>
	  <th width="10%">操作系统</th>
	  <th width="40%"><?php echo php_uname(); ?></th>
	</tr>
	<tr>
	  <th width="10%">操作系统位数</th>
	  <th width="40%">32</th>
	  <th width="10%">服务器端口</th>
	  <th width="40%"><?php echo $_SERVER['SERVER_PORT']; ?></th>
	</tr>
	<tr>
	  <th width="10%">你的ip</th>
	  <th width="40%"><?php echo $_SERVER['REMOTE_ADDR']; ?></th>
	  <th width="10%">你的主机名</th>
	  <th width="40%"><?php echo $_SERVER['REMOTE_HOST']; ?></th>
	</tr>
	<tr>
	  <th width="10%">你的端口</th>
	  <th width="40%"><?php echo $_SERVER['REMOTE_PORT'] ; ?></th>
	  <th width="10%">运行的php版本</th>
	  <th width="40%"><?php echo PHPVERSION(); ?></th>
	</tr>
	<tr>
	  <th width="10%">当前时间</th>
	  <th width="40%"><?php date_default_timezone_set("Asia/Shanghai"); echo date("Y-m-d H:i:s", time()); ?></th>
	  <th width="10%">运行时间</th>
	  <th width="40%"><?php echo date("Y-m-d H:i:s", time()); ?></th>
	</tr>
	<tr>
	  <th width="10%">你的端口</th>
	  <th width="40%"><?php echo $_SERVER['REMOTE_PORT'] ; ?></th>
	  <th width="10%">运行的php版本</th>
	  <th width="40%"><?php echo PHPVERSION(); ?></th>
	</tr>
</div>
</body>
</html>