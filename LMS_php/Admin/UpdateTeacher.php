<?php

session_start();

if (isset($_SESSION['cnic'])) {

  ?>

  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="../CSS/student-profile.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .AddStudent {
      margin-left: 20%;
      margin-top: 2%;
    }
  </style>

  <body onload="myFunction()">

    <?php //while ($row = mysqli_fetch_array($result)) :; ?>

    <div class="container-fluid">
      <div class="row">

        <?php include '../Parts/Admin-SideBar.php'; ?>
        <form class="AddStudent border" action="do_UpdateTeacher.php" method="post">
          <div class="form-row ">
            <H1>Update Teacher Record</H1>
            <?php

            try {
              $id = $_GET["TeacherID"];
              $conn = new PDO("mysql:host=localhost;dbname=lms", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              // Build the query
              $query = "SELECT * FROM `teacher` WHERE ID=?";


              // Prepare and execute statement
              $stmt = $conn->prepare($query);
              $stmt->execute(array($id));

              // Fetch the data
              $data = $stmt->fetch();
              if ($data!="") {
              

                $name = $data['Name'];
                $email = $data['email'];
                $password = $data['password'];
                $Mobile = $data['mobile'];
                $address = $data['address'];
                $cnic = $data['cnic'];
                $dob = $data['dob'];
                $Department = $data['Department'];
                $salary = $data['salary'];
                $picture = $data['picture'];
              } else {
              header("Location: ShowTeacher.php");

              }
            }
            // echo $name;
            catch(PDOException $e) {

              header("Location: ShowTeacher.php");

            }
            // $email = $data["email"];
          
            ?>

              <div class="form-group col-lg-6">
              <label for="inputEmail4">ID</label>
              <input type="Text" class="form-control" id="inputEmail4" disabled name="ID" value =<?php echo $id;?>>
              <input type="hidden" class="form-control" id="inputEmail4"  name="ID" value =<?php echo $id;?>>


            </div>
            <div class="form-group col-lg-6">
              <label for="inputEmail4">Name</label>
              <input type="text" class="form-control" id="inputEmail4" required placeholder="Name..." name="name" value ="<?php echo $name; ?>" >

            </div>

            <div class="form-group col-lg-6">
              <label for="inputPassword4">Email</label>
              <input type="email" class="form-control" id="inputPassword4" required  placeholder="Email..." name="email" value =<?php
              echo $email;?>>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Password</label>
              <input type="text" class="form-control" id="inputCity" name="password" required value =<?php echo $password?>>
            </div>
          </div>
          <div class="form-group col-lg-6">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"value =<?php echo $address?>>
          </div>
          <div class="form-group col-lg-6">
            <label for="inputAddress2">Mobile</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="+92" pattern="[0-9]{1,}" name="mobile"value =<?php echo $Mobile?>>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">CNIC</label>
              <input type="text" class="form-control" id="inputCity" name="cnic" pattern="[0-9]{1,}" required value =<?php echo $cnic?>>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Date of Birth</label>
              <input type="date" class="form-control" id="inputCity" name="dob" pattern="[2023][0-9]{1,}" min="1975-01-01" max="2000-12-31"value =<?php echo $dob?>>
            </div>

            <div class="form-group col-md-6">
              <input type="hidden" class="form-control" id="inputCity" name="picture" value =<?php echo $picture?>>
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Department</label>
              <input type="text" class="form-control" id="inputZip" name="department" pattern="[A-Za-z]{1,255}" value =<?php echo $Department?>>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Salary</label>
              <input type="text" class="form-control" id="inputCity" name="salary" pattern="[0-9]{1,}" value =<?php echo $salary?>>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit">Update Teacher</button>
        </form>
      </div>
    </div>

  <?php// endwhile; ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
      </script>

    <script>
      function myFunction() {
        var element = document.getElementById("addclasshome");
        element.classList.add("active");
        var element = document.getElementById("addclassprofile");
        element.classList.remove("active");
      }
    </script>

  </body>

  </html>


  <?php

} else {

  header("Location: index.php");

  exit();
}

?>