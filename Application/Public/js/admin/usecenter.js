$(document).ready(function(){
	var num = 1;            //声明一个全局变量
		function func() {
	　  var num = 2;        //声明一个局部变量
	    return num;
	}
	console.log(func());    //输出：2 
	console.log(num);
})