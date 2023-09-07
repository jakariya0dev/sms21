<!-- ======= Hero Section ======= -->
{{--<section id="hero" class="d-flex justify-content-center align-items-center" >--}}
{{--    <div class="container position-relative text-center">--}}
{{--        <div class="logo">--}}
{{--            <img src="{{ asset('assets/img/course-1.jpg') }}" alt="" class="img-fluid logo-img" >--}}
{{--        </div>--}}
{{--        <h1 id="school-title">পুরানবাজার ডিগ্রি কলেজ</h1>--}}
{{--        <h2 id="school-subtitle">বাংলাদেশ মিলিটারি একাডেমি, ভাটিয়ারি, ৪৩১৫ চট্টগ্রাম, চট্টগ্রাম বিভাগ, বাংলাদেশ</h2>--}}
{{--    </div>--}}



{{--</section><!-- End Hero -->--}}

<section id="banner" style="padding-top: 0 !important;">
    <div class="container">
        <div class="img-overlay">
            <div class="logo">
                <img id="main-logo" alt="" class="img-fluid logo-img"  src="">
            </div>
            <h1 id="school-name"></h1>
            <h5 id="school-year"></h5>
        </div>
    </div>
</section>

<script>

    getData()

    async function getData(){
        let url = '/hero-data';
        const response = await axios.get(url);

        document.getElementById('school-name').innerText = response.data.name;
        document.getElementById('school-year').innerText = response.data['year'];
        document.getElementById('main-logo').src = `{{ asset('images/logo/${response.data.logo}') }}`;
        // console.log(response.data);
    }
</script>
