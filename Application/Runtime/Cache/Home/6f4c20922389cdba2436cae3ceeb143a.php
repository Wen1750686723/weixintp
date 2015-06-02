<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>益东实业--注册</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="keywords" content="">
<meta name="description" content="">

<link href="/yintong/Public/css/common.css" rel="stylesheet">
<link href="/yintong/Public/css/register.css" rel="stylesheet">
</head>

<body>
   <div class="top">
      <div class="content_left">银通注册</div>
      <div class="content_right">更多</div>
      <div class="content_right">提建议</div>
      <div class="content_right_one"><a href="">登录</a></div>
   </div>
   <div class="border"></div>
   <div class="content">
      <form action="/yintong/index.php/Home/Login/registercheck" method="post">
         <input type="text" name="type" value="1" style="display:none">
         <div class="content_first">
            <a href="/yintong/index.php/Home/Login/register">
               <div class="analyst_right">
                 <img src="/yintong/Public/img/man.png" alt="" class="img"/>
                 <div class="fig">用户注册</div>
               </div>
            </a>        
            <div class="general_left">
               <img src="/yintong/Public/img/gentleman.png" alt="" class="img"/>
               <div class="fig">分析师注册</div>
            </div>
            <img src="/yintong/Public/img/sword.png" alt="" class="general_left_img1"/>
         </div>
         <div class="content_second">
            <div class="fig_left">
               <div class="info">用户名</div>
            </div>
            <input type="text" name="name" class="input_right"/>
         </div>
         <div class="content_second">
            <div class="fig_left">
               <div class="info">密码</div>
            </div>
            <!-- <div class="input_one">086</div> -->
            <input type="password" name="password" class="input_tel"/>
         </div>
          <div class="content_second">
            <div class="fig_left">
               <div class="info">重复密码</div>
            </div>
            <!-- <div class="input_one">086</div> -->
            <input type="password" name="doublepassword" class="input_tel"/>
         </div>
         <div class="content_second">
            <div class="fig_left">
               <div class="info">验证码</div>
            </div>
            <input type="text" class="input_register" name="code" />
            <img src="/yintong/index.php/Home/Login/code" alt="" class="input_box" onclick=" this.src='/yintong/index.php/Home/Login/code/ss/'+Math.random();">
         </div>
         <div class="content_third">
            <input type="checkbox" class="checkbox"/>
            <div class="commit">同意</div>
            <a href="">《协议约定》</a>
         </div>
         <input type="submit" class="content_fourth" value="下一步">
      </form>
   </div>
</body>
</html>