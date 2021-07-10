<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Forgot Password</title>
  </head>
  <body>
    <?php
      $con = mysqli_connect("localhost","root","","student");
      if(isset($_POST['submit']))
      {
        $email = $_POST['email'];
        
        $insert = mysqli_query($con,"SELECT * FROM `register` WHERE `email`='$email' AND `status`='1'");
        
        $count = mysqli_num_rows($insert);
        if($count > 0)
        {
         $row = mysqli_fetch_array($insert);
          $_SESSION['email'] = $row['email'];
          echo "<script>window.location.href='resetpass.php'</script>";          
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
    
    <section id="" class="page-section pad-0">
      <div class="container relative pad-0 border mt-5 py5">
        <div class="m0w1180p">         
          <div class="tac" style="margin-left:400px;">
            <div style="width:380px;">
              <div class="title_bg">
                <div class="fll">
                  <h1 class="fll white" style="text-align: center;">Forgot Password</h1>
                  <hr>
                </div>
              </div>
            </div>
            <div class="clear "></div>
          </div>
        </div>                 
        <div class="m0w1180p">
          <div style="background:#FFF; width:380px!important; overflow:auto; height:auto; margin-left:400px; padding:20px;">
            <h5 class="" style="line-height:22px; text-align: center;">Kindly enter your email id in below given box to receive password reset instruction on your mail.</h5>    
            <br>
            <form id="formID" class="formular" method="post" onsubmit="return validateFormOnSubmit1(this)" action="">    
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td width="100%" >
                      <strong>Enter your Email Address:</strong>
                      <input type="text" name="email" id="emailaddress" style="border:1px solid #CCC; background-color:#fff; height:35px; margin-bottom:5px; width:94%"></td>
                  </tr>
                  <tr>
                    <td>
                      <div style="margin-left: 120px; margin-top: 30px;">
                        <button type="submit" name="submit" class="btn btn-primary">submit</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form><br><br>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>