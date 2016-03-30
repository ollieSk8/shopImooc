(function(){
	$(function(){
		//点击提交时候
		var login_btn=$('#login-btn');
		login_btn.on('click',function(){
			getFormData();
		});
		//点击验证码
		var verificationCode_img=$('.verificationCode-img img');
		verificationCode_img.on('click',function(){
			$(this).attr('src','getVerify.php?'+new Date().getTime());
		});
		//发送请求
		function getFormData(){
			var login_form=$('#login-form');
			var login_obj=login_form.serialize();
			// login_form.find('input').eq().val('');
			console.log(login_obj)
			$.ajax({
				url:'doLogin.php',
				type:'post',
				dataType:'json',
				data:login_obj,
				success:function(data){
					if(data.code==1){
						info(data.info,data.code);
						setTimeout(function(){
							location.href='index.php';
						},1000);
					}else if(data.code==2){
						info(data.info);
					}else{
						info(data.info);
					}
				},
				error:function(err){
					console.log('服务器错误！')
				}
			});
		}
		//处理请求提示框
		function info(msg,code){
			var alert_danger=$('.alert');
			if(code==1){
				alert_danger.removeClass('alert-danger');
				alert_danger.addClass('alert-success');
			}else{
				alert_danger.addClass('alert-danger');
				alert_danger.removeClass('alert-success');
			}
			alert_danger.show();
			alert_danger.html(msg);
			setTimeout(function(){
				alert_danger.hide();
			},2000);
		}
	});
})();