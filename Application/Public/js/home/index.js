$(document).ready(function(){
	// 点击解绑事件
	// $('.').unbind('click').click(function()

  $('.lefts').unbind('click').click(function(){
		$('.lefts').css('font-size','24px');
		$('.none1').slideToggle();
  });
  
   $('.rights').unbind('click').click(function(){
		$('.rights').css('font-size','24px');
		$('.none2').slideToggle();
  });
});