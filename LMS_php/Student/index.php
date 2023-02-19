<?php

include '../Database/Config.php';

session_start();

$message = "";

if (isset($_POST['login'])) {

    $uname = $_POST['username'];

    $pass = $_POST['password'];

    $sql = "SELECT * FROM student WHERE email='$uname' AND password='$pass'";

    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['email'] === $uname && $row['password'] === $pass) {

            $_SESSION['email'] = $row['email'];

            header("Location: Default.php");
        }
    } else {
        $message = "Invalid Username Or Password !";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="../CSS/student-index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .message {
            color: red;
            font-style: italic;
        }

        h6 {
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col-sm-2">
                            <img class="mb-4" src="../Images/NTU.png" alt="" width="auto" height="auto">
                        </div>
                        <div class="col-sm-10 pt-2">
                            <h2>Student Portal</h2>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="username" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br />
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br />
                    <p class="newstudent">New Student? <a href="Register.php">Click here to register</a></p>
                    <br />
                    <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Log in</button>
                    <div class="mt-4 alert alert-danger" id="danger" role="alert">
                        <h6 class="text-center message"><?php echo $message ?></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var x = document.getElementById("danger");
        if (x.innerText === "") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    </script>

</body>

</html>