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

</head>
<body>
<div class="container">
   <div>账户冻结</div>
   <table border="1" width="100%">
    	<tr>
    	  <th width="10%">昵称</th>
        <th width="10%">冻结</th>
    	</tr>

    	<?php
 foreach ($freeze as $key => $value) { echo "<tr>"; echo "<th>".$value["name"]."</th>"; if ($value["freeze"]==1) { echo "<th><a href= \""."/yintong/index.php/Home/Site/tofreezed/id/".$value["id"]."\">账户解冻</a>"."</th>"; }else{ echo "<th><a href= \""."/yintong/index.php/Home/Site/tofreeze/id/".$value["id"]."\">账户冻结</a>"."</th>"; } echo "</tr>"; } ?>
    </table>
</div>
</body>
</html>