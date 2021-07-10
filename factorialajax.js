function factorial()
{
	var xhttp = new XMLHttpRequest();
	var no = document.getElementById('no').value;
	xhttp.open('GET','factorialajax.php?no='+no,true);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState === 4 && this.status === 200)
		{
			document.getElementById('factorial').innerHTML = xhttp.responseText;
		}
	}
	xhttp.send();
}