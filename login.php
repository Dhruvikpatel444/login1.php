<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Client Login</title>
  </head>
  <body>
    <?php
      $con = mysqli_connect("localhost","root","","student");
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
    <section class="container mt-5 py-5 border">
      <h1 style="text-align: center;">Login</h1>
      <hr>
      <form method="POST">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3" required="">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="mobile" class="form-control" id="inputPassword3" required="Please enter strong password.!!">
          </div>
        </div>
        <div style="margin-left: 500px; margin-top: 50px;">
          <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
          <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
        <div style="margin-left: 520px; margin-top: 20px;">
          <a href="forgotpass.php"><span>Forgot Password</span></a>
        </div>      
      </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>