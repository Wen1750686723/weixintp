<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<title>控制台</title>
<style>
  .fig{
    float: left;
    width: 100px;
  }
  .input{
    float: left;
  }
  .img{
    width: 20px;
    height: 20px;
  }
</style>
</head>
<body>
<div class="container">
   <div>充值</div>
   <form action="/yintong/index.php/Home/Fanance/dongjiereceive" method="post">
   <table border="1" width="100%">
     <tr>
       <td><div class="fig">用户id:</div><input type="text" name="userid"/></td>
       <td><div class="fig">冻结钱数:</div><input type="text" name="money"/></td>
     </tr>
     <tr>   
       <td></td>
       <td><input type="submit" value="确定" /></td>
     </tr>
   </table>
   
   
   </form>
</div>
</body>
</html>