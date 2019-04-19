




$(function(){
	$('#checkLogin').click(function(){
		var $unameVal = $.trim($('#uname').val());
		var $upwdVal = $.trim($('#upwd').val());
		//如果没有填写数据,则直接返回false.不执行ajax提交操作
		if($unameVal == '' || $upwdVal == ''){
			alert('请输入用户民和密码');
			return false;
		}
		/*
			$.post(url,parameters,callback);
			url : post提交的服务器端资源地址。
			parameters: 需要传递到服务器端的参数。 参数形式为“键/值”。
			callback : 在请求完成时被调用,这里我们通过$data来接收服务器返回的数据  
		 */
		$.post('{:U('Demo/register')}', {uname : $unameVal,upwd : $upwdVal},function($data) {
			alert($data.info);
			if($data.status == 1){
				location.href = $data.url; 
			}else{
				$('#uname').reset();
				$('#upwd').reset();
			}	
		});
	});
});
// 1
// 	var a = document.getElementById('test');
// 	
// 	a.onclick = function(){
// 		window.location.href = "https://www.baidu.com"; //指定跳到哪个网页
// 	}
// 
// 2
// 	var json = {  contry:{ area:{ man:"12万",  women:"10万" } } };
// 	//方式一：使用eval解析  
// 	var obj = eval(json);  
// 	alert(obj.constructor);
// 	alert(obj.contry.area.women);   
// 	alert(obj.contry.area.man);       json转换
// 
// 
// 3
//  function User(name,age)
// {
// 	// 构造函数体的
//     this.name = name;		
//     this.age = age;
// }
// // 这是原型共享的
// User.prototype = {
// 	constructor:User,
// 	deDo:function(){
// 		console.log(this.name + this.age);
// 	}
// };
// 
// var user1 = new User('ZXC',22);
// var user2 = new User('CXZ',21);
// 
// console.log(user1.deDo());
// console.log(user2.deDo());
//  
//  
//  
//  
//  function Obj(name){
// 	 this.name = name;
// 	 this.sex1 = function() {
// 		console.log(this.name);
// 	}
//  }
//  Obj.prototype = {
// 	 sayName:function(){
// 		 console.log(this.name);
// 	 }
//  }
//  var obj1 = new Obj('guan');
//  var obj2 = new Obj('xxx');
//  console.log(obj1.sayName() === obj2.sayName());
 