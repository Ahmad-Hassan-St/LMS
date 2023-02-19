<?php

session_start();

if (isset($_SESSION['email'])) {

?>

    <?php include '../Database/Config.php'; ?>
    <?php

    $verify = $_SESSION['email'];

    $data = "SELECT ID FROM `student` where email='$verify'";

    $result = mysqli_query($connect, $data);

    $row = mysqli_fetch_array($result);

    $sid = $row['ID'];

    $query = "SELECT * FROM student RIGHT JOIN COURSE_OFFERING ON student.ID=COURSE_OFFERING.StudentID RIGHT JOIN COURSE ON COURSE_OFFERING.CourseID=COURSE.ID RIGHT JOIN TEACHER ON COURSE_OFFERING.TeacherID=Teacher.ID Where student.ID='$sid'";

    // result for method one
    $result = mysqli_query($connect, $query);

    $i = 1;

    ?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enrolled Courses</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            span.marks {
                color: red;
            }
        </style>
    </head>

    <body onload="myFunction()">

        <div class="container-fluid">
            <div class="row">

                <?php include '../Parts/Student-SideBar.php'; ?>

                <div class="col-sm-10">
                    <div class="container">
                        <main>
                            <div class="py-5 text-center">
                                <h2>Enrolled Courses</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Course Code</th>
                                                <th scope="col">Course Title</th>
                                                <th scope="col">Teacher Name</th>
                                                <th scope="col">Sessional Marks</th>
                                                <th scope="col">Mid Marks</th>
                                                <th scope="col">Final Marks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i ?> <?php $i++ ?></th>
                                                    <td><?php echo $row1['CourseID']; ?></td>
                                                    <td><?php echo $row1['CTitle']; ?></td>
                                                    <td><?php echo $row1['Name']; ?></td>
                                                    <td><?php if ($row1['sessional'] == "") {
                                                            echo "<span class='marks'>NMY<span>";
                                                        } else {
                                                            echo $row1['sessional'];
                                                        }
                                                        ?></td>
                                                    <td><?php if ($row1['mid'] == "") {
                                                            echo "<span class='marks'>NMY<span>";
                                                        } else {
                                                            echo $row1['mid'];
                                                        } ?></td>
                                                    <td><?php if ($row1['final'] == "") {
                                                            echo "<span class='marks'>NMY<span>";
                                                        } else {
                                                            echo $row1['final'];
                                                        } ?></td>
                                                </tr>
                                            <?php endwhile; ?>
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
                element.classList.remove("active");
                var element = document.getElementById("addenrolledprofile");
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