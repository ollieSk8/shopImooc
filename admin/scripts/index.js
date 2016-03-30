$(function(){
	var hover_li=$("[data-hover='hover']");
	hover_li.click(function(){
		
		if($(this).find('span').hasClass('glyphicon-plus')){
			$(this).find('span').removeClass('glyphicon-plus').addClass('glyphicon-minus')
			$(this).find('.second-menu').css('display','block');

		}else{
			$(this).find('span').removeClass('glyphicon-minus').addClass('glyphicon-plus')
			$(this).find('.second-menu').css('display','none');
		}
		
	});
	$('.second-menu').on('click','li',function(e){
		e.stopPropagation();
		
	});
});