$(function(){
	
	$(".uname").mouseout(function(event){
		var uname1 = $('.uname').val();
		
		$.post("register",{uname1:uname1},function(data){
			var a = data;
			if(data == a)
			$('.abcc').text(data);
		})
	})
	
});
