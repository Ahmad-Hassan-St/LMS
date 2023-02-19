<?php

session_start();

if (isset($_SESSION['cnic'])) {

?>

    <?php include '../Database/Config.php'; ?>
    <?php

    $cnic = $_SESSION['cnic'];

    $query = "SELECT * FROM student RIGHT JOIN COURSE_OFFERING ON student.ID=COURSE_OFFERING.StudentID RIGHT JOIN COURSE ON COURSE_OFFERING.CourseID=COURSE.ID RIGHT JOIN TEACHER ON COURSE_OFFERING.TeacherID=Teacher.ID Where teacher.cnic='$cnic'";

    // result for method one
    $result = mysqli_query($connect, $query);

    $result2 = mysqli_query($connect, $query);

    $result3 = mysqli_query($connect, $query);

    $i = 1;

    if (isset($_POST["update"])) {
        $cid = $_POST["cid"];
        $tid = $_POST["tid"];
        $regno = $_POST["regno"];
        $sessional = $_POST["sessional"];
        $mid = $_POST["mid"];
        $final = $_POST["final"];
        mysqli_query($connect, "UPDATE course_offering set sessional='$sessional' ,  mid='$mid' , final='$final' WHERE TeacherID='" . $tid . "' AND StudentID='" . $regno . "' AND CourseID='" . $cid . "'");

        header('location: Default.php');
    }

    ?>


    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Password</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .message {
                color: red;
                font-style: italic;
            }
        </style>
    </head>

    <body onload="myFunction()">

        <div class="container-fluid">
            <div class="row">

                <?php include '../Parts/Teacher-SideBar.php'; ?>

                <div class="col-sm-10">
                    <div class="container">
                        <main>
                            <div class="py-5 text-center">
                                <h2>Add Student Marks</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="needs-validation" method="POST" action="AddMarks.php" novalidate>
                                        <div class="row g-3">
                                            <?php while ($row3 = mysqli_fetch_array($result3)) :; ?>
                                                <input name="tid" value="<?php echo $row3['ID']; ?>" hidden />
                                            <?php endwhile; ?>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Course</label>
                                                <select class="form-control" name="cid">
                                                    <option>--- Select Student ---</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                                                        <option value="<?php echo $row1['CourseID']; ?>"><?php echo $row1['CourseID']; ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Student</label>
                                                <select class="form-control" name="regno">
                                                    <option>--- Select Student ---</option>
                                                    <?php while ($row2 = mysqli_fetch_array($result2)) :; ?>
                                                        <option disabled>Semester <?php echo $row2['Semester']; ?> Course <?php echo $row2['CourseID']; ?></option>
                                                        <option value="<?php echo $row2['StudentID']; ?>"><?php echo $row2['StudentID']; ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Sessional</label>
                                                <input type="text" name="sessional" class="form-control" id="email" required>
                                            </div>

                                            <div class="col-12">
                                                <label for="address" class="form-label">Mid</label>
                                                <input type="text" name="mid" class="form-control" id="address" required>
                                            </div>

                                            <div class="col-12">
                                                <label for="address" class="form-label">Final</label>
                                                <input type="text" name="final" class="form-control" id="address" required>
                                            </div>

                                        </div>
                                        <button class="mt-5 w-100 btn btn-success btn-lg" name="update" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </main>

                        <footer class="my-5 pt-0 text-muted text-center text-small">
                            <p class="mb-1">Copyright &copy; 2022 - Learning Management System - All Right Reserved</p>
                        </footer>
                    </div>
                </div>

            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script>
            function myFunction() {
                var element = document.getElementById("addclasshome");
                element.classList.remove("active");
                var element = document.getElementById("addclassprofile");
                element.classList.remove("active");
                var element = document.getElementById("addmarks");
                element.classList.add("active");
            }
        </script>
    </body>

    </html>


<?php

}
else {

    header("Location: index.php");

    exit();
}

?>