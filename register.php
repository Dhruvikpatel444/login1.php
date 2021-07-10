<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>School Register</title>
  </head>
  <body>
    <?php
      $con = mysqli_connect("localhost","root","","student");
      if(isset($_POST['submit']))
      {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mname = $_POST['mname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        
        $insert = mysqli_query($con,"INSERT INTO `register`(`fname`,`lname`,`mname`,`email`,`mobile`,`address`,`gender`,`course`,`dob`) VALUES ('$fname','$lname','$mname','$email','$mobile','$address','$gender','$course','$dob')");

        /*if($insert)
        {
          echo "Successfully Inserted Data";
        }
        else
        {
          echo "Insert Fail";
        }*/
      }
    ?>
    <section class="container border mt-5 py-5">
      <h1 style="text-align: center;">Register</h1>
      <hr>
      <form method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Last Name</label>
          <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Middle Name</label>
          <input type="text" name="mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
          <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
          <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Course</label>
          <select class="form-select" name="course" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="BCA sem-1">BCA sem-1</option>
            <option value="BCOM sem-1">BCOM sem-1</option>
            <option value="BBA sem-1">BBA sem-1</option>
            <option value="MCA sem-3">MCA sem-3</option>
            <option value="MCOM sem-3">MCOM sem-3</option>
            <option value="MBA sem-1">MBA sem-1</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Gender</label>
          &nbsp; &nbsp; &nbsp;

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
            <label class="form-check-label" for="inlineRadio1">MALE</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">FEMALE</label>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>