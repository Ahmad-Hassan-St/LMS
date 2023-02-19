<div class="col-sm-2">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark position-fixed" style="width: 17%; height: 100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Student Portal</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="Default.php" id="addclasshome" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="Profile.php" id="addclassprofile" class="nav-link text-white active">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    Profile
                </a>
            </li>
            <li>
                <a href="EnrolledCourses.php" id="addenrolledprofile" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg>
                    Enrolled Courses
                </a>
            </li>
            <li>
                <a href="AllCourses.php" id="addcoursesprofile" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg>
                    All Courses
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../Images/NTU.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="ChangePassword.php">Change Password</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Logout.php">Log out</a></li>
            </ul>
        </div>
    </div>
</div>