<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/site.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
<title>控制台</title>
</head>
<body>
<div class="container">
  <form action="/yintong/index.php/Home/Site/modifycheck" method="post">
	原密码: <input type="text" name="name"><br>
	新密码: <input type="password" name="password"><br>
	重复新密码：<input type="password" name="doublepassword"><br>
	<input type="text" name="type" value="1" style="display:none;">
	<input type="submit">
</form>
</div>
</body>
</html>