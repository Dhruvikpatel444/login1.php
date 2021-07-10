function table()
{
	var xhttp = new XMLHttpRequest();
	var tab = document.getElementById('tab').value;
	xhttp.open('GET','multiplicationtableajax.php?tab='+tab,true);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState === 4 && this.status === 200)
		{
			document.getElementById('table').innerHTML = xhttp.responseText;
		}
	}
	xhttp.send();
}