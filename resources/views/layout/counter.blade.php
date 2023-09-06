<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-value1" class="purecounter"></span>
                    <p id="counter-caption1">আজকের ভিজিটর</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-value2" class="purecounter"></span>
                    <p id="counter-caption2">এই মাসের ভিজিটর</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-value3" class="purecounter"></span>
                    <p id="counter-caption3">এই বছরের ভিজিটর</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span id="counter-value4" class="purecounter"></span>
                    <p id="counter-caption4">মোট ভিজিটর</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

<script>

    getData()

    async function getData() {

        let url = '/counter-data';

        const response = await axios.get(url);

        document.getElementById('counter-caption1').innerText = response.data.caption1;
        document.getElementById('counter-caption2').innerText = response.data.caption2;
        document.getElementById('counter-caption3').innerText = response.data.caption3;
        document.getElementById('counter-caption4').innerText = response.data.caption4;

        document.getElementById('counter-value1').innerText = response.data.value1;
        document.getElementById('counter-value1').innerText = response.data.value1;
        document.getElementById('counter-value1').innerText = response.data.value1;
        document.getElementById('counter-value1').innerText = response.data.value1;

        // console.log(response.data)


    }
</script>
