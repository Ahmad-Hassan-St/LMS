<?php

session_start();

if (isset($_SESSION['email'])) {

?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Portal</title>
        <link rel="stylesheet" href="../CSS/student-profile.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body onload="myFunction()">

        <div class="container-fluid">
            <div class="row">

                <?php include '../Parts/Student-SideBar.php'; ?>
                <div class="col-sm-10">
                    <section style="background-color: #eee; height: 100vh;">
                        <div class="container py-5">
                            <div class="row ">
                                <div class="col d-flex justify-content-center">
                                    <img class="logo" src="../Images/NTU1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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

<?php

} else {

    header("Location: index.php");

    exit();
}

?>