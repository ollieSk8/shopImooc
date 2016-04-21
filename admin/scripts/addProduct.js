(function(){
	$(function(){
		var sub=true;
		$("#selectFileBtn").click(function(){
			$fileField = $('<input type="file" name="thumbs[]"/>');
			$fileField.hide();
			$("#attachList").append($fileField);
			$fileField.trigger("click");
			$fileField.change(function(){
				$path = $(this).val();
				$filename = $path.substring($path.lastIndexOf("\\")+1);
				$attachItem = $('<button class="btn  btn-danger attachItem" type="button"><span class="text"></span><span class="badge">X</span></button>');
				$attachItem.find(".text").html($filename);
				$("#attachList").append($attachItem);		
			});
		});
		$("#attachList").on('click','.attachItem',function(){
			$(this).prev('input').remove();
			$(this).remove();
		});
		$('#addProduct').validate({
			rules: {
				pName: {
					required: true,
					minlength: 2
				},
				pSn:{
					required:true,
					minlength:6,
					digits:true
				},
				pNum:{
					required:true,
					digits:true
				},
				mPrice:{
					required:true,
					digits:true
				},
				iPrice:{
					required:true,
					digits:true
				}
			},
			messages: {
				pName: {
					required: "商品名不能为空",
					minlength: "商品名至少是2个字符"
				},
				pSn:{
					required:"商品货号不能为空",
					minlength:"商品货号至少是6位字符",
					digits:"商品货号必须是数字"
				},
				pNum:{
					required:"商品数量不能为空",
					digits:"商品数量必须是数字"
				},
				mPrice:{
					required:"商品市场价格不能为空",
					digits:"商品市场价格必须是数字"
				},
				iPrice:{
					required:"商品商城价格不能为空",
					digits:"商品商城价格必须是数字"
				}
			}
		});	
	});
})();