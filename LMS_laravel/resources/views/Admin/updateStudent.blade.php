<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="../CSS/student-profile.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .AddStudent {
        margin-left: 20%;
        margin-top: 2%;
    }
</style>

<body onload="myFunction()">


    <div class="container-fluid">
        <div class="row">

            @include('parts/Admin-SideBar')

            <form class="AddStudent border" action="/updateStudent/{{$data['ID']}}" method="post">
                <H1>Update Student Record</H1>
                @csrf
                <div class="form-row ">
                    <div class="form-group col-md-6">

                        <h4 for="name">Student ID : {{$data['ID']}}</h4>
                        <input type="hidden" class="form-control"  name="id" value="{{$data['ID']}}">
                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Name</label>
                        <input type="Text" class="form-control" id="inputEmail4" placeholder="Name" required name="Name"value="{{$data['Name']}}">

                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" required placeholder="Email"
                            name="Email"value="{{$data['email']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Password</label>
                        <input type="password" class="form-control" id="inputCity" required  name="Password"value="{{$data['password']}}">
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required
                        name="Address"value="{{$data['address']}}">
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputAddress2">Mobile</label>
                    <input type="text" class="form-control" id="inputAddress2" required
                        placeholder="Apartment, studio, or floor" name="Mobile"value="{{$data['mobile']}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">CNIC</label>
                        <input type="text" class="form-control" id="inputCity" required pattern="[0-9]{1,}" name="CNIC"value="{{$data['cnic']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Date of Birth</label>
                        <input type="text" class="form-control" id="inputCity"  required name="dob"value="{{$data['dob']}}">
                    </div>

                    <div class="form-group col-md-6">

                        <input type="hidden" class="form-control" id="inputCity" name="picture"value="{{$data['picture']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Degree</label>
                        <input type="text" class="form-control" id="inputZip" required pattern="[A-za-z]{1,}" name="degree"value="{{$data['degree']}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Batch</label>
                        <input type="text" class="form-control" id="inputCity" name="Batch" required value="{{$data['batch']}}">
                    </div>
                    <br>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update Student</button>

            </form>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        function myFunction() {
            var element = document.getElementById("addclassprofile");
            element.classList.add("active");
            var element = document.getElementById("addclassprofile1");
            element.classList.remove("active");
        }
    </script>

</body>

</html>
