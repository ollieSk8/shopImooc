function editAdmin(id){
	window.ID=id
	window.location.href='editAdmin.php?id='+id;
}
(function(){
	$(function(){
		$("#editAdmin-from").validate({
			rules: {
				adminUserName: {
					required: true,
					minlength: 2
				},
				adminUserPass: {
					required: true,
					minlength: 6
				},
				adminEmail: {
					required: true,
					email: true
				},
			},
			messages: {
				adminUserName: {
					required: "请输入管理员姓名",
					minlength: "管理员名称至少是2个字符"
				},
				adminUserPass: {
					required: "请输入管理员密码",
					minlength: "管理员密码至少是6个字符"
				},
				adminEmail: "请输入正确的邮箱地址",
			},
			submitHandler: function() {
				   var editAdmin_obj=$("#editAdmin-from").serialize();
				   $.ajax({
					url:'doAdminAction.php?act=editAdmin&id='+$("#editAdmin-from").attr('data-id'),
					type:'post',
					dataType:'json',
					data:editAdmin_obj,
					success:function(data){
						if(data.code==1){
							$('.alert-success').show();
							//$("#editAdmin-from")[0].reset()
							setTimeout(function(){
								$('.alert-success').hide();
								window.location.href='listAdmin.php'
							},3000);
						}
					},
					error:function(err){
						$('.alert-danger').show();
						setTimeout(function(){
							$('.alert-danger').hide();
						},3000);
					}
				});
			}
		});	
	});
})();