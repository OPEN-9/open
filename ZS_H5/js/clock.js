
$(function(){ 
　　$(".mui-action-back").click(function(){ 
　　　　$("#main").show(); 
	}); 
	
	$('.mainright').click(function(){
		$('#main').hide();
	})
	
	$('.submit').click(function(){
		$('.main1').show();
	})
	
	$('.close').click(function(){
		$('.main1').hide();
	})
	
}); 