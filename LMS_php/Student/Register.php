<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../CSS/student-index.css">
    <link rel="stylesheet" href="../CSS/student-index-register.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <div class="row">
                        <div class="col-sm-2">
                            <img class="mb-4" src="../Images/NTU.png" alt="" width="auto" height="auto">
                        </div>
                        <div class="col-sm-10 pt-2">
                            <h2>Student Registration</h2>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br />
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br />
                    <button class="w-100 btn btn-lg btn-success" type="submit">Log in</button>
                    <br /> <br />
                    <p class="newstudent oldstudent text-end"><a href="index.php">Click here to Log in</a></p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>