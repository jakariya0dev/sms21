<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


{{--        <h1 class="logo me-auto"><a href="master.blade.php">Mentor</a></h1>--}}

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="master.blade.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home') }}#banner">হোমপেজ</a></li>
                <li><a href="{{ route('home') }}#notice">নোটিশ</a></li>
                <li><a href="{{ route('home') }}#academic-info">একাডেমিক তথ্য</a></li>
                <li><a href="{{ route('home') }}#about">প্রতিষ্ঠান পরিচিতি</a></li>
                <li><a href="{{ route('home') }}#administration">বাণী</a></li>
                <li><a href="{{ route('home') }}#achievement">প্রতিষ্ঠানের অর্জন</a></li>
                <li><a href="{{ route('home') }}#photo-gallery">ফটো গ্যালারী</a></li>
                <li><a href="{{ route('home') }}#footer">যোগাযোগ</a></li>

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
