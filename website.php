<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="full-page">
		<div class="navbar">
			<div>
				<a href="website.html">Dhruvik</a>
			</div>
			<nav>
				<ul id='MenuItems'>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">CONTACT</a></li>
					<li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width: auto;">LOGIN</button></li>					
				</ul>
			</nav>
		</div>
		<div id='login-form' class='login-page'>
			<div class="form-box">
				<div class='button-box'>
					<div id='btn'></div>
					<button type='button' onclick='login()' class='toggle-btn'>Log In</button>
					<button type='button' onclick='register()' class='toggle-btn'>Register</button>
				</div>
				<?php
			      $con = mysqli_connect("localhost","root","","student");
			      error_reporting(0);
			      session_start();
			      if(isset($_POST['submit']))
			      {
			        $email = $_POST['email'];
			        $mobile = $_POST['mobile'];
			        
			        $insert = mysqli_query($con,"SELECT * FROM `register` WHERE `email`='$email' AND `mobile`='$mobile' AND `status`='1'");
			        
			        $count = mysqli_num_rows($insert);
			        if($count > 0)
			        {
			         $row = mysqli_fetch_array($insert);
			          $_SESSION['email'] = $row['email'];
			          $_SESSION['mobile'] = $row['mobile'];
			          echo "<script>window.location.href='admin.php'</script>";          
			        }
			        else
			        {
			          echo "FAIL";
			        }


			        /*if($insert)
			        {
			          echo "Successfully Inserted Data";
			        }
			        else
			        {
			          echo "Insert Fail";
			        }*/
			      }
			      echo $_SESSION['email'];
			    ?>
				<form id='login' class='input-group-login'>
					<input type="text" class='input-field' placeholder='Email Id' required="">
					<input type="password" class='input-field' placeholder='Enter Password' required="">
					<input type="checkbox" class='check-box'><span>Remember Password</span><button type="submit" class='submit-btn'>Log In</button>
				</form>
				
				<form id='register' class='input-group-register'>
					<input type="text" class='input-field' name="fname" placeholder='First Name' required="">
					<input type="text" class='input-field' name="lname" placeholder='Last Name' required="">
					<input type="email" class='input-field' name="email" placeholder='Email Id' required="">
					<input type="password" class='input-field' name="password" placeholder='Enter Password' required="">
					<input type="password" class='input-field' placeholder='Confirm Password' required="">
					<input type="checkbox" class='check-box'><span>I agree to the terms and conditions</span><button type="submit" class='submit-btn'>Register</button>
				</form>
			</div>
		</div>
	</div>
	<script>
		var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
		var modal = document.getElementById('login-form');
		window.onclick = function(event)
		{
			if(event.target == modal)
			{
				modal.style.display = 'none';
			}
		}
	</script>
</body>
</html>