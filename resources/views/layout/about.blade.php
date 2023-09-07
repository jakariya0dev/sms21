<!-- ======= About Section ======= -->
<section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>College introduction</h2>
                <p>এক নজরে কলেজ পরিচিতি</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img id="about-image" src="" class="img-fluid w-100 h-100" alt="About Image">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">

                    <p id="about-para" class="text-justify"></p>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

<script>

    getData()

    async function getData() {

        let url = '/about-data';

        const response = await axios.get(url);

        document.getElementById('y-video').src = response.data.video_url;
        document.getElementById('about-para').innerText = response.data.description;
        document.getElementById('about-image').src = `{{ asset('images/about/${response.data.image}') }}`;

        // console.log(response.data)


    }
</script>

