<div class="col-sm-2" style="margin-left:-20px;">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark position-fixed" style="width: 17%; height: 100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Admin Portal</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/addStudent" id="addclasshome1" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                  Add Student

                </a>
            </li>
            <li class="nav-item">
                <a href="/showstudent" id="addclasshome2" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                   Show Student
                </a>
            </li>
            <li>
                <a href="/AddTeacher" id="addclassprofile1" class="nav-link text-white active">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                       Add Teacher
                    </a>
            </li>
            <li class="nav-item">
                <a href="/ShowTeacher" id="addclasshome3" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                   Show Teacher
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
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout">Log out</a></li>
            </ul>
        </div>

    </div>

</div>
<?php /**PATH C:\xampp\htdocs\project\ahmad\resources\views/parts/Admin-SideBar.blade.php ENDPATH**/ ?>