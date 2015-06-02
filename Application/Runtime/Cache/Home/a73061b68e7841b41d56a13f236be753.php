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
<link rel="stylesheet" href="/yintong/Public/kindeditor/themes/default/default.css" />
<script src="/yintong/Public/kindeditor/kindeditor-min.js"></script>
<script src="/yintong/Public/kindeditor/lang/zh_CN.js"></script>

<script language="javascript">
   KindEditor.ready(function(K) {
        var editor = K.editor({
          allowFileManager : true
        });
        K('#image3').click(function() {
          editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
              showRemote : false,
              imageUrl : K('#url3').val(),
              clickFn : function(url, title, width, height, border, align) {
                K('#url3').val(url);
                editor.hideDialog();
              }
            });
          });
        });
      });

</script>
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
   <div>修改返佣平台</div>
   <form action="/yintong/index.php/Home/Platform/updatereceive" method="post">
   <table border="1" width="100%">
     <tr>
       <td><div class="fig">名称:</div><input type="text" name="client" value="<?php echo $platform["name"];?>" /></td>
       <td><div class="fig">返现点数:</div><input type="text" name="return" value="<?php echo $platform["point"];?>"/></td>
     </tr>
     <tr>
       <td><div class="fig">返现周期：</div><input type="text" name="circle" value="<?php echo $platform["circle"];?>"/></td>
       <td><div class="fig">杠杆：</div> <input type="text" name="heaver" value="<?php echo $platform["heaver"];?>"/></td>
     </tr>
     <tr>
       <td><div class="fig">门槛：</div><input type="text" name="strip" value="<?php echo $platform["strip"];?>"/></td>
       <td> <div class="fig">银行：</div><input type="text" name="bank" value="<?php echo $platform["bank"];?>"/></td>
     </tr>
     <tr>
       <td><div class="fig">软件下载地址：</div><input type="text" name="software" value="<?php echo $platform["software"];?>"/></td>
       <td><div class="fig">详细情况：</div><input type="text" name="detail" value="<?php echo $platform["detail"];?>"/></td>
     </tr>
     <tr>
      <td><input type="text" name="img" id="url3" value="<?php echo $platform["img"];?>" /> <input type="button" id="image3" value="选择图片" /></td>
       <td><div class="fig">是否置顶：</div><input type="radio" name="top" value="1" />置顶&nbsp;&nbsp;<input type="radio" name="top" value="0" />不置顶</td>
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