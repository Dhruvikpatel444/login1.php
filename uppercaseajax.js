function uppercase()
{
	var xhttp = new XMLHttpRequest();
	var name = document.getElementById('name').value;
	xhttp.open('GET','uppercaseajax.php?name='+name,true);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState === 4 && this.status === 200)
		{
			document.getElementById('upper').innerHTML = xhttp.responseText;
		}
	}
	xhttp.send();
}