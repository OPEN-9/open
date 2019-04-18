$(document).ready(function(){
	
	$("#submit").on('click',function(){
		var uname = $("#uname").val();
		var upwd = $("#upwd").val();
		$.post("test",{uname:uname,upwd:upwd},function($data){
			if($data.status == 1){  
				console.log(111);
				location.href = $data.url;
			}else{
				alert($data.info,'211');
			}     
		}); 
	});
	
});