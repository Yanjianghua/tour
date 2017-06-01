window.onload=function(){
	hDmen();
}
	function hDmen() {
		var aTab = document.getElementById("column"),
			aDt = aTab.getElementsByTagName("li"),
			aDiv = document.getElementById("columnbox").getElementsByTagName("div");
		for(var i = 0; i < aDt.length; i++) {
			aDt[i].index = i;
			aDt[i].onmouseenter = function() {
				for(var i = 0; i < aDt.length; i++) {
					aDt[i].className = "";
					aDiv[i].style.display = "none";
				}
				this.className = "select2";
				aDiv[this.index].style.display = "block";
			}
		}
	}
	
			var Listbox=document.getElementById("listdivbox");
			var Listbtn=Listbox.getElementsByTagName("button");
			var ListH3=Listbox.getElementsByTagName("h3");
			
			var FromShow2=document.getElementById("fromshow2");
			var Fromdiv2=FromShow2.getElementsByTagName("div")[0]
			var FromH3=FromShow2.getElementsByTagName("h3")[0];
			var FromClose=document.getElementById("closefrom2");

			for (var i=0;i<Listbtn.length;i++) {
				Listbtn[i].index=i;				
				Listbtn[i].onclick=function(){
					FromShow2.style.display="block";
					FromH3.innerHTML=ListH3[this.index].innerText;
				}
			}
			
			FromClose.onclick=function(){
				FromShow2.style.display="none";
				FromH3.innerHTML="";
			}
			
			Fromdiv2.onclick=function(){
				FromShow2.style.display="none";
				FromH3.innerHTML="";
			}
//			
//			var pNum=document.getElementById("numpeople1");
//			var pInp=pNum.getElementsByTagName("input");
//			var pI=pNum.getElementsByTagName("i");
//			var n=1,n1=0;
//			function numadd(num){
//				pInp[num].value=++n;
//				pI[num].className="";
//			}
//			function numadd1(num){
//				pInp[num].value=++n1;
//				pI[num].className="";
//			}
//			function numjj(num){				
//				if(pInp[num].value<=1){
//					return false;
//				}else{
//					pInp[num].value=--n;					
//				}
//			}
//			function numjj1(num){
//				if(pInp[num].value==0){
//					return false;
//				}else{
//					pInp[num].value=--n1;					
//				}
//			}
$(function(){
	//加
	$(".add-i").each(function(){
		$(this).click(function(){
			var num=$(this).prev().val();
			    num++;
			    $(this).prev().val(num);			
		});
	});
	
	//减
	$(".reduc-i").each(function(){
		$(this).click(function(){
			var num2=$(this).next().val();
			    num2--;
			    if(num2 <= 1){
			    	num2=1;
			    }
			    $(this).next().val(num2);			
		})
	})
	
})
