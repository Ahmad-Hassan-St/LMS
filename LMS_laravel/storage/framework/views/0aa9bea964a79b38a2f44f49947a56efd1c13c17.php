<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/CSS/student-index.css">
    <link rel="stylesheet" href="/CSS/Admin-index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                <form method="post" action="/login">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-2">
                            <img class="mb-4" src="Images/NTU.png" alt="" width="auto" height="auto">
                        </div>
                        <div class="col-sm-10 pt-2">
                            <h2>Admin Panel</h2>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" name="cnic" id="floatingInput"
                            placeholder="3310016516535">
                        <label for="floatingInput">CNIC</label>
                    </div>
                    <br />
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br />
                    <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Log in</button>
                    <div class="mt-4 alert alert-danger" id="danger" role="alert">
                        <h6 class="text-center message"></h6>
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
<?php /**PATH C:\xampp\htdocs\project\ahmad\resources\views/admin/login.blade.php ENDPATH**/ ?>