<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-total-student"></span>
                    <p id="counter-caption1">শিক্ষার্থী সংখ্যা</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-total-teacher"></span>
                    <p id="counter-caption2">শিক্ষক সংখ্যা</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-total-official"></span>
                    <p id="counter-caption3">মোট কর্মচারী</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-total-admin"></span>
                    <p id="counter-admin">পরিচালনা পর্ষদ</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

<script>

    getData()

    async function getData() {

        let url = '/counter-data';

        const response = await axios.get(url);

        document.getElementById('counter-total-student').innerText = response.data.student;
        document.getElementById('counter-total-teacher').innerText = response.data.teacher;
        document.getElementById('counter-total-official').innerText = response.data.official;
        document.getElementById('counter-total-admin').innerText = response.data.admin;

        // console.log(response.data)

    }
</script>
