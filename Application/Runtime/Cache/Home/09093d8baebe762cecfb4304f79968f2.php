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
<style>
  .fig{
    float: left;
    width: 100px;
  }
  .input{
    float: left;
  }
</style>
</head>
<body>
<div class="container">
   <div>修改数据</div>
   <form action="/yintong/index.php/Home/Shout/operateupdatereceive" method="post">
   <table border="1" width="100%">
   <input type="text" name="id" value="<?php echo $id;?>" style="display:none"/>
   <input type="text" name="analystid" value="<?php echo $analystid;?>" style="display:none"/>   
     <tr>
       <td><select name="type">
          <?php
 if ($shoutfee["type"]==1) { echo "<option value=\"1\" selected>上升</option><option value=\"2\">下降</option>"; } else{ echo "<option value=\"1\">上升</option><option value=\"2\" selected>下降</option>"; } ?>
          
          </select></td>
       <td><div class="fig">点数:</div><input type="text" name="point" value="<?php echo $shoutfee["point"];?>"/></td>
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