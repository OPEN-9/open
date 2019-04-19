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
 