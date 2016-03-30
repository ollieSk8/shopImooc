(function(){
	$(function(){
		//编辑管理员表单提交
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
		function editAdmin(id){
			window.location.href='editAdmin.php?id='+id;
		}
		function delAdmin(id){
			var msg='你确认删除'+$('#delete_btn_'+id).attr('data-username')+'管理员么？';
			if(confirm(msg)){
				$.ajax({
					url:'doAdminAction.php?act=delAdmin&id='+id,
					type:'post',
					dataType:'json',
					success:function(data){
						if(data.code==1){
							$('.alert-success').show();
							$('#delete_btn_'+id).parent().parent().remove();
							setTimeout(function(){
								$('.alert-success').hide();
							},3000);
						}
					},
					error:function(err){
						$('.alert-danger').show();
						setTimeout(function(){
							window.location.href='listAdmin.php';
						},3000);
					}
				});
			}
		}
		window.editAdmin=editAdmin;
		window.delAdmin=delAdmin;
	});
})();