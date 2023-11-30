<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}">
                <i class="bx bxs-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-user-account"></i><span>Data Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a href="{{ url('lecturers') }}">
                        <i class="bi bi-circle"></i><span>All Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('lecturers/create') }}">
                        <i class="bi bi-circle"></i><span>Add Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-on') }}">
                        <i class="bi bi-circle"></i><span>Users Active</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user-off') }}">
                        <i class="bi bi-circle"></i><span>Users NonActive</span>
                    </a>
                </li>

            </ul>
        </li><!-- End data users Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contentration-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bx-customize"></i><span>Concentration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contentration-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a href="{{ url('concentration') }}">
                        <i class="bi bi-circle"></i><span>All Concentration</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('concentration/create') }}">
                        <i class="bi bi-circle"></i><span>Add Concentration</span>
                    </a>
                </li>
            </ul>
        </li><!-- End concentration Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-detail"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a href="{{ url('courses') }}">
                        <i class="bi bi-circle"></i><span>All Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('courses/create') }}">
                        <i class="bi bi-circle"></i><span>Add Courses</span>
                    </a>
                </li>
            </ul>
        </li><!-- End courses Nav -->

        <!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->



    </ul>

</aside>
