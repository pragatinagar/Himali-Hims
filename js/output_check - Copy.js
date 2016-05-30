// JavaScript Document
	function checkCondition() { 
 		var r = document.getElementsByTagName('tr');
		
  for (i = 2; i < r.length; i++) 
  {
	  child4=parseInt(r[i].children[4].children[0].value);
	  child5=parseInt(r[i].children[5].children[0].value);
	  child6=parseInt(r[i].children[6].children[0].value);
	  child7=parseInt(r[i].children[7].children[0].value);	
	  child8=parseInt(r[i].children[8].children[0].value);
	  child9=parseInt(r[i].children[9].children[0].value);
	  child10=parseInt(r[i].children[10].children[0].value);
	  child11=parseInt(r[i].children[11].children[0].value);
	  child12=parseInt(r[i].children[12].children[0].value);
	  child13=parseInt(r[i].children[13].children[0].value);
	  child14=parseInt(r[i].children[14].children[0].value);
	  child15=parseInt(r[i].children[15].children[0].value);
	  child16=parseInt(r[i].children[16].children[0].value);
		//alert(child5+child8+child11+child14);
		alert(child4);
  	if((child4 == child5+child8+child11+child14) && (child7 == child5*child6) && (child10 == child8*child9) && (child13 == child11*child12) && (child16 == child15*child14))
  {
	r[i].children[4].children[0].style.backgroundColor="green";
	r[i].children[5].children[0].style.backgroundColor="green";
	r[i].children[6].children[0].style.backgroundColor="green";
	r[i].children[7].children[0].style.backgroundColor="green";
	r[i].children[8].children[0].style.backgroundColor="green";
	r[i].children[9].children[0].style.backgroundColor="green";
	r[i].children[10].children[0].style.backgroundColor="green";
	r[i].children[11].children[0].style.backgroundColor="green";
	r[i].children[12].children[0].style.backgroundColor="green";
	r[i].children[13].children[0].style.backgroundColor="green";
	r[i].children[14].children[0].style.backgroundColor="green";
	r[i].children[15].children[0].style.backgroundColor="green";
	r[i].children[16].children[0].style.backgroundColor="green";
  }
	else
	{
	r[i].children[4].children[0].style.backgroundColor="red";
	r[i].children[5].children[0].style.backgroundColor="red";
	r[i].children[6].children[0].style.backgroundColor="red";
	r[i].children[7].children[0].style.backgroundColor="red";
	r[i].children[8].children[0].style.backgroundColor="red";
	r[i].children[9].children[0].style.backgroundColor="red";
	r[i].children[10].children[0].style.backgroundColor="red";
	r[i].children[11].children[0].style.backgroundColor="red";
	r[i].children[12].children[0].style.backgroundColor="red";
	r[i].children[13].children[0].style.backgroundColor="red";
	r[i].children[14].children[0].style.backgroundColor="red";
	r[i].children[15].children[0].style.backgroundColor="red";
	r[i].children[16].children[0].style.backgroundColor="red";
	}

  
  }
}
