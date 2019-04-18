window.onload = function(){
	
	var aBanner = document.getElementsByClassName("banner");
	var oBody = document.getElementsByTagName("body")[0];
	var num = 0;
	aBanner[1].style.opacity = "1";

	function time(){
		if( num < 4 ){
			for(a = 0 ; a<aBanner.length;a++){
				aBanner[a].style.opacity = "0";
 			}
			console.log(num);
			aBanner[num].style.opacity = "1";
		}else{
			console.log(num);
			aBanner[3].style.opacity = "0";
			aBanner[num].style.opacity = "1";
			num += 1;
		}
			
		switch(num){
			case 5 :
				num = 0;
				break;
			default:
				num++;
		}
			
	}

	setInterval(time,1000);
	
}