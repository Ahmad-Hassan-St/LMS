<?php

session_start();

if (isset($_SESSION['email'])) {

?>

    <?php

    $message = "";

    include('../Database/Config.php');

    $id = $_SESSION["email"];
    if (count($_POST) > 0) {
        $result = mysqli_query($connect, "SELECT * from student WHERE email='" . $id . "'");
        $row = mysqli_fetch_array($result);
        if ($_POST["currentPassword"] == $row[6]) {
            mysqli_query($connect, "UPDATE student set password='" . $_POST["newPassword"] . "' WHERE email='" . $id . "'");
            $message = "Password Changed Sucessfully";
        } else {
            $message = "Current Password is not correct";
        }
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

                <?php include '../Parts/Student-SideBar.php'; ?>

                <div class="col-sm-10">
                    <div class="container">
                        <main>
                            <div class="py-5 text-center">
                                <h2>Change Password</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6 class="text-center message"><?php echo $message ?></h6>
                                    <form class="needs-validation" action="ChangePassword.php" method="POST" novalidate>
                                        <div class="row g-3">

                                            <div class="col-12">
                                                <label for="email" class="form-label">Old Password</label>
                                                <input type="password" class="form-control" id="email" required>
                                            </div>

                                            <div class="col-12">
                                                <label for="address" class="form-label">New Password</label>
                                                <input type="password" class="form-control" id="address" required>
                                            </div>

                                        </div>
                                        <button class="mt-5 w-100 btn btn-success btn-lg" type="submit">Change</button>
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