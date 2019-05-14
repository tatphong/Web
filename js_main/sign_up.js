function dky()
{
	var sao=document.getElementsByClassName('sgnup');
	var email=document.getElementById('emailct');
	var ps=document.getElementsByClassName('pass');
	var ck=document.getElementById('check');
	var btn=document.getElementById('send');
	var c=1;
	//kt sao
	var s=1;
	for (var i=0;i<sao.length;++i)
	{
		if (sao[i].value==='')
			{
				s=0;
				sao[i].style.outline='1px solid red';
			}
		else {sao[i].style.outline='none';}
	}
	if (ps[0].value==="") 
		{
			s=0;
			ps[0].style.outline='1px solid red';
		}
	else {ps[0].style.outline='none';
		 localStorage.setItem('name',sao[0].value);}
	if (s===0)
		{
			c=0;
			alert('Please complete your info!');
		}
	//kt password
	if (ps[0].value!==ps[1].value&&ps[0].value!=="")
		{
			c=0;
			alert('Confirm password incorrect');
			ps[1].style.outline='1px solid red';
		}
	else {ps[1].style.outline='none';
		 localStorage.setItem('pw',ps[0].value);}
	//kt email
	var vta=email.value.indexOf('@');
	var vtb=email.value.indexOf('.com');
	if (vta>=vtb&&email.value!=="")
	{
		c=0;
		alert('Wrong Email');
		email.style.outline='1px solid red';
	}
	else if (email.value!=="") {email.style.outline='none';
							   localStorage.setItem('email',email.value);}
	//kt checkbox
	if (ck.checked===false)
		{
			c=0;
			alert('Please accept to our policy');
			btn.setAttribute('type','button');
		}
	if (c===1)
		{
			localStorage.setItem('signin',1);
			console.log(localStorage.getItem('signin'));
			document.getElementById('link').setAttribute('href',"home.html");
			alert('Sign up success');
		}
}

//ngay
(function ()
{
	var d=new Date();
	var date=document.getElementsByClassName('sl');
	date[0].innerHTML+='<option>'+'Day'+'</option>';
	for (var i=1;i<=31;++i)
		date[0].innerHTML+='<option>'+i+'</option>';
	date[1].innerHTML+='<option>'+'Month'+'</option>';
	for (var i=1;i<=12;++i)
		date[1].innerHTML+='<option>'+i+'</option>';
	date[2].innerHTML+='<option>'+'Year'+'</option>';
	for (var i=1990;i<=d.getYear()+1900;++i)
		date[2].innerHTML+='<option>'+i+'</option>';
})()
//update ngay theo thang va nam
function ddmmyy()
{
	var day;
	var dtemp;
	var d=document.getElementById('dd');
	var m=document.getElementById('mm');
	var y=document.getElementById('yy');
	if (m.value==1||m.value==3||m.value==5||m.value==7||m.value==8||m.value==10||m.value==12)
		day=31;
	if (m.value==4||m.value==6||m.value==9||m.value==11)
		day=30;
	if (m.value==2)
		if (y.value%400==0||(y.value%4==0&&y.value%100!=0)) day=29;
		else day=28;
	d.innerHTML='<option>'+d.value+'</option>';
	for (var i=1;i<=day;++i)
		d.innerHTML+='<option>'+i+'</option>';
}