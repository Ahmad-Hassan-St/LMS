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

    $i = 1;

    if (isset($_POST["update"])) {
        $tid = $_POST["tid"];
        $regno = $_POST["regno"];
        $sessional = $_POST["sessional"];
        $mid = $_POST["mid"];
        $final = $_POST["final"];
        mysqli_query($connect, "UPDATE course_offering set sessional='$sessional' ,  mid='$mid' , final='$final' WHERE TeacherID='" . $tid . "' AND StudentID='" . $regno . "'");

        header('location: Default.php');
    }


    ?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enrolled Students</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
            input {
                width: 50px;
            }

            input[name="regno"] {
                width: 150px;
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
                                <h2>Enrolled Students</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Course Code</th>
                                                <th scope="col">Course Title</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Student Reg. No.</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Sessional</th>
                                                <th scope="col">Mid</th>
                                                <th scope="col">Final</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i ?> <?php $i++ ?></th>
                                                    <td><?php echo $row1['CourseID']; ?></td>
                                                    <td><?php echo $row1['CTitle']; ?></td>
                                                    <td><?php echo $row1['2']; ?></td>
                                                    <td><?php echo $row1['0']; ?></td>
                                                    <td><?php echo $row1['Semester']; ?></td>
                                                    <td><?php echo $row1['sessional']; ?></td>
                                                    <td><?php echo $row1['mid']; ?></td>
                                                    <td><?php echo $row1['final']; ?></td>
                                                <?php endwhile; ?>
                                                </tr>
                                        </tbody>
                                    </table>
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
                var element = document.getElementById("addcoursesprofile");
                element.classList.add("active");
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