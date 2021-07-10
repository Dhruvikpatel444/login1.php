<!DOCTYPE html>
<html>
	<head>
		<meta>
		<title>Unit-3 Program-1</title>
		<script>
			function postComment()
			{
				// Creating the XMLHttpRequest object
				var request = new XMLHttpRequest();
				// Instantiating the request object
				request.open("POST","unit3-1(2).php");
				// Defining event listener for readystatechange event
				request.onreadystatechange = function()
				{
					// Check if the request is compete and was successful
					if(this.readyState === 4 && this.status === 200)
					{
						//Inserting the response from seerver into an HTML element
						document.getElementById("result").innerHTML = this.responseText;
					}
				};
				// Retriving the form data
				var myForm = document.getElementById("myForm");
				var formData = new FormData(myForm);

				//Sending the request to the server
				request.send(formData)
			}
		</script>
	</head>
	<body>
		<form id="myForm">
			<label>Name :</label>
			<div><input type="text" name="name"></div>
			<br>
			<label>Comment :</label>
			<div><textarea name="comment"></textarea></div>
			<p><button type="button" onclick="postComment()">Post Comment</button></p>
		</form>
		<div id="result">
			<p>Content of the result DIV box will be replaced by the server response</p>
		</div>
	</body>
</html>