<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="../CSS/student-profile.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body onload="myFunction()">

    <div class="container-fluid">
        <div class="row">

            @include('parts/Admin-SideBar')

            <div class="col-sm-10">
                <section style="background-color: #eee; height: 100vh;">
                    <div class="container py-5">
                        <div class=Jumbotron>
                            @if (\Session::has('success'))
                                <div class="alert alert-danger">
                                    <h4> {{ \Session::get('success') }}<h4>
                                </div>
                                @elseif (\Session::has('update'))
                            </div>
                            <div class="alert alert-success" role="alert">
                                <h4> {{ \Session::get('update') }}<h4>

                            </div>

                                <hr>
                            @endif
                        </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Student as $row)
                                    <tr>

                                        <td><b>{{ $row['ID'] }}<b></td>
                                        <td>{{ $row['Name'] }}</td>
                                        <td>{{ $row['email'] }}</td>
                                        <td>{{ $row['address'] }}</td>
                                        <td>{{ $row['mobile'] }}</td>
                                        <td>{{ $row['degree'] }}</td>
                                        <td>{{ $row['batch'] }}</td>

                                        <td> <button type='button' class='btn btn-primary btn-sm'><a
                                                    href='updateStudent/{{ $row['ID'] }}'
                                                    class='Text-light'>Update</a>
                                            </button>
                                            <button type='button' class='btn btn-danger btn-sm' class=""><a
                                                    href='/DeleteStudent/{{ $row['ID'] }}'
                                                    class='Text-light'>Delete</a></button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        function myFunction() {
            var element = document.getElementById("addclasshome2");
            element.classList.add("active");
            var element = document.getElementById("addclassprofile1");
            element.classList.remove("active");
        }
    </script>
</body>

</html>
