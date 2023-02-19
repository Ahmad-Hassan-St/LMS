<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.1.96/css/materialdesignicons.min.css" integrity="sha512-NaaXI5f4rdmlThv3ZAVS44U9yNWJaUYWzPhvlg5SC7nMRvQYV9suauRK3gVbxh7qjE33ApTPD+hkOW78VSHyeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid" id="background">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <?php include './Parts/Navbar.php'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 main">
                        <h1>Learning Management System</h1>
                        <br />
                        <a href="#Team" class="hero-btn">Click To Scroll Down</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="Team">
        <?php include './Parts/Team.php'; ?>
    </div>

    <div class="container-fluid d-flex justify-content-center" id="Contact">
        <?php include './Parts/Contact.php'; ?>
    </div>

    <div class="container-fluid" id="Footer">
        <?php include './Parts/Footer.php'; ?>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>