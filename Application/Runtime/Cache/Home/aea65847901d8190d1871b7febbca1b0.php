<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />

<link rel="stylesheet" type="text/css" href="/yintong/Public/css/manager.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
<title>控制台</title>
</head>
<body>
<div class="container">
	<div class="topbar">
		<div class="logo"></div>
		<div class="menu">
			<div class="menuList" style="display:none"></div>
			<div class="menuList">返佣平台</div>
			<div class="menuList">用户管理</div>
			<div class="menuList">资金管理</div>
			<div class="menuList">喊单管理</div>
			<div class="menuList">每日定评管理</div>
			<div class="menuList">预约开户</div>
			<div class="menuList">数据统计管理</div>
			<div class="menuList">技术学院管理</div>


		</div>
		<div class="userDiv">
			<div class="txtUser"></div>
			<div class="userBox">
				<div href="/yintong/index.php/Home/Site/siteinstrution">站点概况</div>
				<div href="/yintong/index.php/Home/Site/modify">修改密码</div>
				<div href="/yintong/index.php/Home/Login/logout" name="out">退出登录</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="leftMenu">
			<div class="topOn">主面板</div>
			<ul class="list">
				<li href="/yintong/index.php/Home/Site/siteinstrution">网站系统</li>
				<li href="/yintong/index.php/Home/Site/run" id="station">站点配置</li>
				<li href="/yintong/index.php/Home/Site/announce" id="station">公告管理</li>
				<li href="/yintong/index.php/Home/Site/announce" id="station">广告管理</li>
				<li href="/yintong/index.php/Home/Site/letter" id="station">站内信</li>
				<li href="/yintong/index.php/Home/Site/freeze" id="station">账户冻结</li>
				<li href="/yintong/index.php/Home/Site/modify" id="chpwd">修改密码</li>
				<li href="/yintong/index.php/Home/Login/logout" id="out">退出登录</li>
			</ul>
		</div>
		
		<div class="leftMenu">
		    <div class="topOn">返佣平台管理</div>
			<ul class="list">
				<li href="/yintong/index.php/Home/Platform/index">返佣平台操作</li>
				<li href="/yintong/index.php/Home/Platform/goodstype">返佣品种操作</li>
				
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">用户管理</div>
			<ul class="list">
				<li href="/yintong/index.php/Home/User/user">用户基本信息管理</li>
				<li href="/yintong/index.php/Home/user/userdetail">用户详细信息管理</li>
				<li href="/yintong/index.php/Home/user/analyst">分析师信息管理</li>
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">资金管理</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Fanance/fanance">资金状态</li>
				<li href="/yintong/index.php/Home/Fanance/tixian">提现管理</li>
				<li href="/yintong/index.php/Home/Fanance/chongzhi">充值</li>
				<li href="/yintong/index.php/Home/Fanance/dongjie">冻结</li>

				
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">喊单管理</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Shout/shout">喊单管理</li>
				
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">每日定评管理</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Dailycomment/add">添加每日定评</li>
				<li href="/yintong/index.php/Home/Dailycomment/update">每日定评操作</li>
							
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">预约开户管理</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Reservation/main">预约开户</li>
				
							
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">数据统计</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Data/tixian">会员统计</li>
			    <li href="/yintong/index.php/Home/Data/tixian">--提现记录</li>
			    <li href="/yintong/index.php/Home/Data/chongzhi">--充值记录</li>
			    <li href="/yintong/index.php/Home/Data/zengsong">--赠送金额记录</li>
			    <li href="/yintong/index.php/Home/Data/koujian">--扣减金额记录</li>
			    <li href="/yintong/index.php/Home/Data/userdeal">--会员做单记录</li>
			    <li href="/yintong/index.php/Home/Data/answer">--问答记录</li>
			    <li href="/yintong/index.php/Home/Shout/shout">分析师统计</li>
			    <li href="/yintong/index.php/Home/Shout/shout">--分析师喊单记录</li>
			    <li href="/yintong/index.php/Home/Data/answer">--问答记录</li>
				
							
			</ul>
		</div>
		<div class="leftMenu">
		    <div class="topOn">技术学院管理</div>
			<ul class="list">
			    <li href="/yintong/index.php/Home/Article/add">添加文章</li>
			    <li href="/yintong/index.php/Home/Article/update">文章操作</li>
				
							
			</ul>
		</div>
		<div class="mainBox">
			<iframe id="mainFrame" scrolling="yes" frameborder="0" src=""></iframe>
		</div>		
	</div>
</div>
</body>
</html>