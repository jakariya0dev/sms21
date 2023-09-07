<!-- ======= Achievement Courses Section ======= -->
<section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Achievement</h2>
                <p>আমাদের অর্জন</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100" id="achieve-data">

                <!--Item-->

            </div>

        </div>
    </section><!-- End Popular Achievement Section -->

<script>

    getData()

    async function getData() {

        let url = '/achieve-data';

        const response = await axios.get(url);

        response.data.forEach((item) => {
           document.getElementById('achieve-data').innerHTML += `

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('images/achieve/${item.image}') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>${item.created_at}</h4>
                            </div>
                            <h3>${item.title}</h3>
                        </div>
                    </div>
                </div>
            `;
        });

        console.log(response.data)


    }
</script>
