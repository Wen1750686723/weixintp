<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/article.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<style>
	form{
		margin: 0;
		}
		textarea {
			display: block;
		}
</style>
<link rel="stylesheet" href="/yintong/Public/kindeditor/themes/default/default.css" />
<script src="/yintong/Public/kindeditor/kindeditor-min.js"></script>
<script src="/yintong/Public/kindeditor/lang/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		K.create('textarea[name="content"]', {
			autoHeightMode : true,
			afterCreate : function() {
				this.loadPlugin('autoheight');
			}
		});
	});

</script>

<title>控制台</title>
</head>
<body>
<div class="container">
   <form action="/yintong/index.php/Home/Article/accept" method="post">
	   <div class="all">
	   	<div class="main">添加文章</div>
	   	<div class="title">标题</div>
	   	<input type="text" class="input1" name="title" />
	   	<div class="title">内容</div>   	
	   </div>
	   <div class="textmain">
	   		<textarea name="content" class="content" style="width:100%;height:340px;"></textarea>
	   </div>
	   <div>
	   		<input type="submit" style="float:right;margin-right:50px;width:50px;" value="发表" />
	   	</div>
	</form>
</div>
</body>
</html>