<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>益东实业--登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="keywords" content="">
<meta name="description" content="">

<link href="/yintong/Public/css/common.css" rel="stylesheet">
<link href="/yintong/Public/css/login.css" rel="stylesheet">
<script type="text/javascript" src="/yintong/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/login.js"></script>
</head>

<body>
   <div class="wrap">
   <img src="/yintong/Public/img/back.jpg" alt="" class="img">
   	<div class="top">
   		<div class="head">
   		   <img src="" alt="" class="head_first"/>
   		   <div class="head_second">银通投资</div>
   		   <div class="head_third">提建议</div>
   		   <div class="head_third">服务大厅</div>
   		   <div class="head_fourth">银通投资首页</div>
   		</div>
   	</div>
      <form action="/yintong/index.php/Home/Login/logincheck" method="post">
      	<div class="content">
      	    <div class="title_main">
      	    	<img src="/yintong/Public/img/logo.png" alt="" class="title"/>
      	    </div>
      		<div class="body_login">
      			<div class="login_main">
      				<div class="login_one">登录银通</div>
      				<div class="login_two">
      					<div class="login_left"></div>
      					<input type="text" class="login_input" name="name" />
      					<img src="/yintong/Public/img/delete.png" alt="" class="login_img"/>
      				</div>
      				<div class="login_two">
      					<div class="login_left_pa"></div>
      					<input type="password" class="login_input" name="password" />
      				</div>
      				<div class="login_three">忘记登录密码？</div>
      				<input type="submit" class="login_four" value="登&nbsp;录" />
      				<a href="/yintong/index.php/Home/Login/register" class="login_five">免费注册</a>
      			</div>
      		</div>
      	</div>
      </form>
   </div>
</body>
</html>