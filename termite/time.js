function startTime(){
	var today=new Date();
	var n=today.getFullYear();
	var y=today.getMonth()+1;
	var r=today.getDate();
	var w=today.getDay();
	var chnNumChar = ["日","一","二","三","四","五","六"];
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
// add a zero in front of numbers<10
	y=checkTime(y);
	r=checkTime(r);
	m=checkTime(m);
	s=checkTime(s);
	var str=chnNumChar[w];
document.getElementById('clock').innerHTML=n+"/"+y+"/"+r+" 星期"+str+" "+h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}