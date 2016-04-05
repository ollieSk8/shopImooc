(function(){
	$(function(){
		$("#editCate-from").validate({
			rules: {
				cName: {
					required: true,
					minlength: 2
				}
			},
			messages: {
				cName: {
					required: "分类名不能为空",
					minlength: "分类名至少是2个字符"
				}
			},
			submitHandler: function() {
				   var editCate_obj=$("#editCate-from").serialize();
				   $.ajax({
					url:'doAdminAction.php?act=editCate&id='+$("#editCate-from").attr('data-id'),
					type:'post',
					dataType:'json',
					data:editCate_obj,
					success:function(data){
						if(data.code==1){
							$('.alert-success').show();
							$("#editCate-from")[0].reset()
							setTimeout(function(){
								$('.alert-success').hide();
								window.location.href='listCate.php'
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
		function editCate(id){
			window.location.href='editCate.php?id='+id;
		}
		function delCate(id){
			var msg='你确认删除'+$('#delete_btn_'+id).attr('data-cName')+'分类么？';
			if(confirm(msg)){
				$.ajax({
					url:'doAdminAction.php?act=delCate&id='+id,
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
							window.location.href='listCate.php';
						},3000);
					}
				});
			}
		}
		window.editCate=editCate;
		window.delCate=delCate;
	});
})();