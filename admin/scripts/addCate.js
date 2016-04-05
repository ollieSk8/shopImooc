(function(){
	$(function(){
		$("#addCate-from").validate({
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
				   var addCate_obj=$("#addCate-from").serialize();
				   $.ajax({
					url:'doAdminAction.php?act=addCate',
					type:'post',
					dataType:'json',
					data:addCate_obj,
					success:function(data){
						if(data.code==1){
							$('.alert-success').show();
							$("#addCate-from")[0].reset()
							setTimeout(function(){
								$('.alert-success').hide();
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