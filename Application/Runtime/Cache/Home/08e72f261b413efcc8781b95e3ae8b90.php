<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/run.css" />
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery-1.7.2.min.js"></script>

<script type="text/javascript">
    var ss="/thinkphp_3.2.3_full";
	// $(function(){
 //      $.ajax({ 
	// 	// type: "POST",
	// 	url: "/thinkphp_3.2.3_full/index.php/Home/Look/looktestcontenttest",
	// 	dataType: "json",
	// 	data: "id=3",
	// 	success: function(data){
			  
	// 	    for(var p in data){
	//           $(".selectone").append("<option value="+data[p].id+">"+data[p].testname+"</option>");
	//         }	          	
	//     },
	// 	error:function(){
	// 		alert("F");
	// 		return false;
	//    }
	 
 //     });
    // });

</script>
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/test.js"></script>

<title>控制台</title>
</head>
<body>
  <div class="container">
  	<form action="/thinkphp_3.2.3_full/index.php/Home/Test/addmultiple" method="post">
	<select name="subject" class="selecttwo">
    <?php
 foreach ($subject as $key => $value) { echo "<option value=\"".$value["id"]."\">".$value["subjectname"]."</option>"; } ?>
	</select><br>
	<select name="test" class="selectone" style="width:50px;">
    
	</select><br>
	 输入题干
    <input type="text" name="main"><br>
    输入A选项
    <input type="text" name="amain"><br>
    输入B选项
    <input type="text" name="bmain"><br>
    输入C选项
    <input type="text" name="cmain"><br>
    输入D选项
    <input type="text" name="dmain"><br>
     输入正确答案
    <input type="text" name="answer"><br>
	<input type="submit">
	</form>
  </div>
  
</body>
</html>