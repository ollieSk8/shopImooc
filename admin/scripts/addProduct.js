(function(){
	$(function(){
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
		})
	});
})();