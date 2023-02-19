use app/http/showStudentController;
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="../CSS/student-profile.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body onload="myFunction()">

    <div class="container-fluid">
        <div class="row">

            <?php echo $__env->make('parts/Admin-SideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-sm-10">
                <section style="background-color: #eee; height: 100vh;">
                    <div class="container py-5">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $Student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><b>"<?php echo e($row['ID']); ?>"<b></td>
                                    <td>"<?php echo e($row['Name']); ?>"</td>
                                    <td>"<?php echo e($row['email']); ?>"</td>
                                    <td>"<?php echo e($row['address']); ?>"</td>
                                    <td>"<?php echo e($row['mobile']); ?>"</td>
                                    <td>"<?php echo e($row['degree']); ?>"</td>
                                    <td>"<?php echo e($row['batch']); ?>"</td>

                                    <td> <button type='button' class='btn btn-primary btn-sm'><a
                                                href='updateStudent.php?studentID="<?php echo e($row['ID']); ?>"'
                                                class='Text-light'>Update</a>
                                        </button>
                                        <button type='button' class='btn btn-danger btn-sm'><a
                                                href='DeleteStudent.php?studentID="<?php echo e($row['ID']); ?>"'
                                                class='Text-light'>Delete</a></button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                    </div>
                </section>
            </div>
        </div>
    </div>

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
<?php /**PATH C:\xampp\htdocs\project\ahmad\resources\views/admin/showStudent.blade.php ENDPATH**/ ?>