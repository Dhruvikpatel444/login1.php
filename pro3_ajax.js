function fibonacci()
{
	var xhttp = new XMLHttpRequest;
	var min = document.getElementById('min').value;
	var max = document.getElementById('max').value;
	
	xhttp.open('GET','pro3_php.php?m='+min+'&max='+max,true);
	xhttp.onreadystatechange=function()
	{
		if(xhttp.readyState==4)
		{
			document.getElementById('fibonacci').innerHTML=xhttp.responseText;
		}
	}
	xhttp.send();
}