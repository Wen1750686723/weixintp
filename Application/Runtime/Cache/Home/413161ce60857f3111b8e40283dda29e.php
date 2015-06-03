<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />

<link rel="stylesheet" type="text/css" href="/weixintp/Public/css/manager.css" />
<script type="text/javascript" src="/weixintp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/weixintp/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/weixintp/Public/js/jquery.manager.js"></script>
<title>控制台</title>
</head>
<body>
<div class="container">
	<div class="topbar">
		<div class="logo"></div>
		<div class="menu">
			<div class="menuList" style="display:none"></div>
			<div class="menuList">系统管理</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>
			<div class="menuList">1</div>


		</div>
		<div class="userDiv">
			<div class="txtUser"></div>
			<div class="userBox">
				<div href="/weixintp/index.php/Home/Index/index">站点概况</div>
				<div href="/weixintp/index.php/Home/Index/modify">修改密码</div>
				<div href="/weixintp/index.php/Home/Login/logout" name="out">退出登录</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="leftMenu">
			<div class="topOn">主面板</div>
			<ul class="list">
				<li href="/weixintp/index.php/Home/Index/index">获取token</li>
				<li href="/weixintp/index.php/Home/Index/upimage" id="station">上传图片</li>
				<li href="/weixintp/index.php/Home/Index/yingda" id="station">机器人管理</li>
			</ul>
		</div>
		
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
				<li href="/weixintp/index.php/Home/Platform/index">1</li>
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
				<li href="/weixintp/index.php/Home/User/user">1</li>
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Fanance/fanance">1</li>		
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Shout/shout">1</li>
				
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Dailycomment/add">1</li>
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Reservation/main">1</li>
				
							
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Data/tixian">1</li>
			    
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">1</div>
			<ul class="list">
			    <li href="/weixintp/index.php/Home/Article/add">1</li>
			</ul>
		</div>
		<div class="mainBox">
			<iframe id="mainFrame" scrolling="yes" frameborder="0" src=""></iframe>
		</div>		
	</div>
</div>
</body>
</html>