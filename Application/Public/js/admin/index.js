$(document).ready(function() {
	// 点击解绑事件
	// $('.').unbind('click').click(function()

	$('.lefts').unbind('click').click(function() {
		$('.lefts').css('font-size', '24px');
		$('.none1').slideToggle();
	});

	$('.rights').unbind('click').click(function() {
		$('.rights').css('font-size', '24px');
		$('.none2').slideToggle();
	});

	function getDate() {
		var today = new Date();
		var date = today.getFullYear() + "-" + twoDigits(today.getMonth() + 1) + "-" + twoDigits(today.getDate()) + " ";
		var week = " 星期" + "日一二三四五六 ".charAt(today.getDay());
		var time = twoDigits(today.getHours()) + ": " + twoDigits(today.getMinutes()) + ": " + twoDigits(today.getSeconds());
		$(".time").html(time);
		$(".date").html(date + '/' + week);
	}

	function twoDigits(val) {
		if (val < 10) return "0" + val;
		return val;
	}
	$(function() {
		setInterval(getDate, 1000);
	});

});
