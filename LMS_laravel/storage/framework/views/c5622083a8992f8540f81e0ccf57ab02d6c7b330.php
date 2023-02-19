    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teacher Profile</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <style>
        .AddStudent{
            margin-left: 20% ;
            margin-top: 2%;
        }
    </style>

<body onload="myFunction()">


            <div class="container-fluid">
                <div class="row">

                      <?php echo $__env->make('parts/Admin-SideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form class="AddStudent border" action="AddTeacher" method="post">
    <div class="form-row " >
    <H1>Add Teacher Record</H1>
    <?php echo csrf_field(); ?>
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Name</label>
      <input type="Text" class="form-control" id="inputEmail4" placeholder="Email" name ="name">

    </div>

    <div class="form-group col-lg-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="inputPassword4" placeholder="Password" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Password</label>
      <input type="password" class="form-control" id="inputCity" name="password">
    </div>
  </div>
  <div class="form-group col-lg-6" >
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-group col-lg-6">
    <label for="inputAddress2">Mobile</label>
    <input type="text" class="form-control" id="inputAddress2" name="mobile">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">CNIC</label>
      <input type="text" class="form-control" id="inputCity"name="cnic">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Date of Birth</label>
      <input type="date" class="form-control" id="inputCity" name="dob">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Picture</label>
      <input type="file" class="form-control" id="inputCity" name="picture">
    </div>
     <div class="form-group col-md-6">
      <label for="inputZip">Department</label>
      <input type="text" class="form-control" id="inputZip" name="department">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Salary</label>
      <input type="text" class="form-control" id="inputCity" name="salary">
    </div>
</div>
   <button type="submit" class="btn btn-primary" name="submit">Add Teacher</button>
</form>
                </div>
            </div>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
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



<?php /**PATH C:\xampp\htdocs\project\ahmad\resources\views/admin/AddTeacher.blade.php ENDPATH**/ ?>