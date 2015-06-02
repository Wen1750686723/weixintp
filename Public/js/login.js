$(function(){
	/**
	 * 输入框离开时，出现消除按钮
	 * @param  {[type]}
	 * @return {[type]}
	 */
    $(".login_main .login_two:eq(0) .login_input").blur(function(){
       $(".login_main .login_two .login_img").css("display","block");
    });
    /**
    清空input框的值
    **/
	$(".login_main .login_two .login_img").click(function(){

	    $(".login_main .login_two:eq(0) .login_input").val("");		
		
	})	
})