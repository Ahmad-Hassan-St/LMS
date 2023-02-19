<?php

session_start();

if (!isset($_SESSION['cnic'])) {

  ?>

  <?php

  // include '../Database/Config.php';

  // $verify = $_SESSION['email'];

  // $query = "SELECT * FROM `student` where email='$verify'";

  // $result = mysqli_query($connect, $query);

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


      <div class="container-fluid">
        <div class="row">

          <?php @include('parts/Admin-SideBar') ?>
          <div class="col-sm-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark position-fixed" style="width: 17%; height: 100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Admin Portal</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="AddStudent.php" id="addclasshome" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                          Add Student

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ShowStudent.php" id="addclasshome" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                           Show Student
                        </a>
                    </li>
                    <li>
                        <a href="AddTeacher.php" id="addclassprofile" class="nav-link text-white active">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                               Add Teacher
                            </a>
                    </li>
                    <li class="nav-item">
                        <a href="ShowTeacher.php" id="addclasshome" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                           Show Teacher
                        </a>
                    </li>

                    <li>
                        <a href="EnrolledCourses.php" id="addenrolledprofile" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table" />
                            </svg>
                            Enrolled Courses
                        </a>
                    </li>

                    <li>
                        <a href="AllCourses.php" id="addcoursesprofile" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            All Courses
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../Images/NTU.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong></strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="ChangePassword.php">Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="Logout.php">Log out</a></li>
                    </ul>
                </div>

            </div>

        </div>
          <form class="AddStudent border" action="do_AddStudentRecord.php" method="post">
            <H1>Add Student Record</H1>

            <div class="form-row ">
              <div class="form-group col-lg-6">
                <label for="inputEmail4">Name</label>
                <input type="Text" class="form-control" id="inputEmail4" placeholder="Email" name="Name">

              </div>

              <div class="form-group col-lg-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" id="inputPassword4" placeholder="Password" name="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Password</label>
                <input type="password" class="form-control" id="inputCity" name="Password">
              </div>
            </div>
            <div class="form-group col-lg-6">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
            </div>
            <div class="form-group col-lg-6">
              <label for="inputAddress2">Mobile</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                name="Mobile">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">CNIC</label>
                <input type="text" class="form-control" id="inputCity" name="CNIC">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Date of Birth</label>
                <input type="text" class="form-control" id="inputCity" name="dob">
              </div>

              <div class="form-group col-md-6">
                <label for="inputCity">Picture</label>
                <input type="file" class="form-control" id="inputCity" name="picture">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Degree</label>
                <input type="text" class="form-control" id="inputZip" name="degree">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Batch</label>
                <input type="text" class="form-control" id="inputCity" name="Batch">
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
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
<?php /**PATH C:\xampp\htdocs\project\ahmad\resources\views///admin/AddStudent.blade.php ENDPATH**/ ?>