<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin</title>
  </head>
  <body>
    <section class="container mt-5 py-5 ">
      <h1 style="text-align: center;">Register Student Data</h1>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Sr.no</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name </th>
            <th scope="col">Middle Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile No.</th>
            <th scope="col">Address</th>
            <th scope="col">Course</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Admission</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $con = mysqli_connect("localhost","root","","student");
            $sel = mysqli_query($con,"SELECT * FROM `register` WHERE `status`='0' ORDER BY fname DESC");
            $no = 0;
            while($row = mysqli_fetch_array($sel))
            {
              $no = $no + 1;
            
          ?>
          <tr>
            <th scope="row"><?php echo $no ?></th>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                 <a href="accept.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-outline-light">Accept</button></a>
                <a href="delete.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-outline-light">Reject</button></a>
              </div>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>