$(function(){

   $(".selecttwo").blur(function(){
      
      $.ajax({ 
		type: "POST",
		url: ss+"/index.php/Home/Ajax/looktestcontenttest",
		dataType: "json",
		data: "id="+$(".selecttwo option:selected").val(),
		success: function(data){
			$(".selectone").text("");  
		    for(var p in data){
	          $(".selectone").append("<option value="+data[p].id+">"+data[p].testname+"</option>");
	        }	          	
	    },
		error:function(){
			alert("F");
			return false;
	   }
	 
    });
   });
});