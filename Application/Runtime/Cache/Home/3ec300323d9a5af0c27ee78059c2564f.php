<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/run.css" />
<link rel="stylesheet" type="text/css" href="/yintong/Public/css/pager.css" />
<script type="text/javascript" src="/yintong/Public/js/jquery.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/yintong/Public/js/jquery.manager.js"></script>
<script type="text/javascript">
  $(function(){

   $(".delete").click(function(){
      
      $.ajax({ 
      type: "POST",
      url: "/yintong/index.php/Home/Ajax/delete",
      dataType: "json",
     
      success: function(data){
        window.location.href=window.location.href;
        },
      error:function(){
        alert("F");
        return false;
       }
     
      });
   });
    $(".add").click(function(){
     
      $.ajax({ 
      type: "POST",
      url: "/yintong/index.php/Home/Ajax/add",
      dataType: "json",
     
      success: function(data){
        window.location.href=window.location.href;
        },
      error:function(){
        alert("F");
        return false;
       }
     
      });
   });
});
</script>
<style>
  .add{
    width: 100px;
    height: 30px;
    line-height: 30px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    border:solid 1px blue;
  }
  .delete{
    width: 100px;
    height: 30px;
    cursor: pointer;
    line-height: 30px;
    font-size: 16px;
    text-align: center;
    border:solid 1px blue;
  }
</style>
<title>控制台</title>
</head>
<body>
<div class="container">
   <?php
 if ($shouttype["text"]==1) { echo "<div class=\"delete\" style=\"float:left;color:blue;\">取消自动审计</div>"; }else{ echo "<div class=\"add\" style=\"float:left;color:blue;\">自动审计</div>"; } ?>

   <table border="1" width="100%">
    	<tr>
    	  <th width="10%">用户昵称</th>
    	  <th width="10%">订单号</th>
    	  <th width="20%">喊单内容</th>
    	  <th width="10%">方向</th>
    	  <th width="5%">建仓点数</th> 
    	  <th width="5%">建仓时间</th>
    	  <th width="5%">平仓点数</th>
        <th width="5%">平仓时间</th>
        <th width="5%">止损点数</th>
        <th width="5%">止损时间时间</th>
        <th width="10%">通过</th>
        <th width="10%">数据操作</th>
    	</tr>
    	<?php
 foreach ($shout as $key => $value) { echo "<tr>"; echo "<th>".$value["analystid"]."</th>"; echo "<th>".$value["ordernumber"]."</th>"; echo "<th>".$value["text"]."</th>"; echo "<th>".$value["direction"]."</th>"; echo "<th>".$value["setuppoint"]."</th>"; echo "<th>".$value["setuptime"]."</th>"; echo "<th>".$value["evenuppoint"]."</th>"; echo "<th>".$value["evenuptime"]."</th>"; echo "<th>".$value["stoplose"]."</th>"; echo "<th>".$value["stopgain"]."</th>"; if ($value["type"]==1) { echo "<th>已通过</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/Shout/pass/id/".$value["id"]."\">通过</a>"."</th>"; } echo "<th><a href= \""."/yintong/index.php/Home/Shout/operate/id/".$value["id"]."/analystid/".$value["analistid"]."\">数据操作</a>"."</th>"; echo "</tr>"; } ?>
    </table>
     <?php
 $CurrentPage=isset($_GET['page'])?$_GET['page']:1; $myPage=new pager($shoutcount,intval($CurrentPage)); $pageStr= $myPage->GetPagerContent(); echo $pageStr; ?>
</div>
</body>
</html>