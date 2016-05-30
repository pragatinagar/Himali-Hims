// JavaScript Document
function cheakMulti1() {

var r = document.getElementsByTagName('tr');

for (i = 2; i < r.length; i++) 
{	

//if(r[i].children[2].children[0].value > 0)
r[i].children[19].children[0].value=r[i].children[9].children[0].value*r[i].children[14].children[0].value;  

// if(r[i].children[3].children[0].value > 0)	
r[i].children[20].children[0].value=r[i].children[10].children[0].value*r[i].children[15].children[0].value;	

//if(r[i].children[4].children[0].value > 0)	
r[i].children[21].children[0].value=r[i].children[11].children[0].value*r[i].children[16].children[0].value;

//if(r[i].children[5].children[0].value > 0)	
r[i].children[17].children[0].value=r[i].children[7].children[0].value*r[i].children[12].children[0].value;

//if(r[i].children[6].children[0].value > 0)	
r[i].children[18].children[0].value=r[i].children[8].children[0].value*r[i].children[13].children[0].value;	

if(r[i].children[18].children[0].value == 0)
r[i].children[18].children[0].value='';
if(r[i].children[17].children[0].value == 0)
r[i].children[17].children[0].value='';
if(r[i].children[19].children[0].value == 0)
r[i].children[19].children[0].value='';
if(r[i].children[20].children[0].value == 0)
r[i].children[20].children[0].value='';
if(r[i].children[21].children[0].value == 0)
r[i].children[21].children[0].value='';


}
}


