<?php

session_start();

if (isset($_SESSION['email'])) {

?>

    <?php

    include '../Database/Config.php';

    $message = "";

    $verify = $_SESSION['email'];

    $result = "";

    $query = "SELECT * FROM `student` where email='$verify'";

    $result = mysqli_query($connect, $query);

    $id = $_SESSION["email"];

    if (isset($_POST["update"])) {
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $email1 = $_POST["email1"];
        mysqli_query($connect, "UPDATE student set email='$email1' ,  address='$address' , mobile='$mobile' WHERE email='" . $id . "'");

        header('location: Profile.php');

    }


    ?>


    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Profile</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
            .danger {
                color: red;
                text-align: center;
            }
        </style>

    </head>

    <body onload="myFunction()">

        <div class="container-fluid">
            <div class="row">

                <?php include '../Parts/Student-SideBar.php'; ?>
                <?php while ($row = mysqli_fetch_array($result)) :; ?>

                    <div class="col-sm-10">
                        <div class="container">
                            <main>
                                <div class="py-5 text-center">
                                    <h2>Update Profile</h2>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form class="needs-validation" method="POST" action="UpdateProfile.php" novalidate>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email1" value="<?php echo $row['email']; ?>" placeholder="you@example.com" required>
                                                </div>

                                                <div class="col-12">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>" placeholder="1234 Main St" required>
                                                </div>

                                                <div class="col-12">
                                                    <label for="zip" class="form-label">Mobile</label>
                                                    <input type="text" class="form-control" id="zip" name="mobile" value="<?php echo $row['mobile']; ?>" required>
                                                </div>
                                            </div>
                                            <button class="mt-5 w-100 btn btn-success btn-lg" name='update' type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </main>

                        <?php endwhile; ?>

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