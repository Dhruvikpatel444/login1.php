<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resect Password</title>
  </head>
  <body>
    <?php
      $con = mysqli_connect("localhost","root","","student");
      if(isset($_POST['submit']))
      {
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        
        $insert = mysqli_query($con,"SELECT * FROM `register` WHERE `email`='$email' AND `dob`='$dob'");
        
        $count = mysqli_num_rows($insert);
        if($count > 0)
        {
         $update = mysqli_query($con,"UPDATE `register` SET `mobile`='$mobile' WHERE `email`='$email' AND `dob`='$dob'");
          echo "<script>window.location.href='login.php'</script>";          
        }
        else
        {
          echo "FAIL";
        }
      }
      echo $_SESSION['email'];
    ?>
    
    <section id="" class="page-section pad-0 mt-5 py-5">
      <div class="container relative pad-0">         
        <form method="POST">
          <table class="table table-success table-striped">
            <thead>
                <h1 style="text-align: center;"><strong>Reset Password</strong></h1>
                <hr>
            </thead>
            <tbody>
              <tr>
                <td class="table-success">
                  <p><strong>Enter Email Id :</strong></p>
                </td>
                <td class="table-success">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </td>
              </tr>
              <tr>
                <td class="table-success">
                  <p><strong>Enter Your Date of Birth :</strong></p>
                </td>
                <td class="table-success">
                  <input type="Date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </td>
              </tr>
              <tr>
                <td class="table-success">
                  <p><strong>Enter New Password :</strong></p>
                </td>
                <td class="table-success">
                  <input type="password" class="form-control validate[required] text-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                </td>
              </tr>
              <tr>
                <td class="table-success">
                  <p><strong>Confirm Password :</strong></p>
                </td>
                <td class="table-success">
                  <input type="password" name="mobile" class="form-control validate[required,equals[password]] text-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                </td>
              </tr>
            </tbody>
          </table>
          <div style="margin-left: 500px; margin-top: 30px;">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
          </div>
        </form>  
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>