function signin()
{
	var sign=document.getElementById('sign');
	var e=document.getElementById('name');
	var p=document.getElementById('pw');
	var btn=document.getElementById('send');
	if (e.value==='admin' && p.value==='admin') 
		{
			document.getElementById('links').setAttribute('href',"admin.html");
		}
	else {
		if (localStorage.getItem('email')===e.value && localStorage.getItem('pw')===p.value)
	{
		e.style.outline='1px solid white';
		p.style.outline='1px solid white';
		sign.innerHTML=localStorage.getItem('name');
		localStorage.setItem('signin',1);
		document.getElementById('links').setAttribute('href',"home.html");
	}
	else {
		alert('Email or password maybe incorrect!!!');
		e.style.outline='1px solid red';
		p.style.outline='1px solid red';
		 }
	}
	
}
