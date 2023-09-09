<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


{{--        <h1 class="logo me-auto"><a href="dash.blade.php">Mentor</a></h1>--}}

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="dash.blade.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="index.html">হোমপেজ</a></li>
                <li><a href="index.html">নোটিশ</a></li>
                <li><a href="index.html">একাডেমিক তথ্য</a></li>
                <li><a href="about.html">প্রতিষ্ঠান পরিচিতি</a></li>
                <li><a href="courses.html">বাণী</a></li>
                <li><a href="trainers.html">প্রতিষ্ঠানের অর্জন</a></li>
                <li><a href="events.html">ফটো গ্যালারী</a></li>
                <li><a href="pricing.html">যোগাযোগ</a></li>

                <li class="dropdown"><a href="#"><span>একাডেমিক</span> <i class="bi bi-chevron-down"></i></a>
                    <ul style="background-color: purple">
                        <li><a href="{{ route('teacher.list') }}">শিক্ষক তালিকা</a></li>
                        <li><a href="{{ route('class.routine') }}">ক্লাস রুটিন</a></li>
                        <li><a href="{{ route('syllabus.all') }}">সিলেবাস</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
