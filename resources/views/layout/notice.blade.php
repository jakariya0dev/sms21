<!-- ======= Why Us Section ======= -->
<section id="notice">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title">
                    <h2>Notice Board</h2>
                    <p>নোটিশ বোর্ড</p>
                </div>
                <ul class="list-group list-group-flush" id="notice-board">

{{--                    <li class="list-group-item fs-5">--}}
{{--                        <a href="">--}}
{{--                            <h5>প্রয়োজনের কথা বিবেচনা করে এই একাডেমিক ক্যালেন্ডার প্রণয়ন করা।</h5>--}}
{{--                            <h5 style="color: #807f7f">প্রকাশিতঃ ২/২/২০</h5>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item fs-5">--}}
{{--                        <a href="">--}}
{{--                            <h5>প্রয়োজনের কথা বিবেচনা করে এই একাডেমিক ক্যালেন্ডার প্রণয়ন করা।</h5>--}}
{{--                            <h5 style="color: #807f7f">প্রকাশিতঃ ২/২/২০</h5>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
                <a href="" class="btn btn-sm btn-primary mt-2">সবগুলো নোটিশ দেখুন</a>
            </div>
            <div class="col-md-4">
                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/YuAya0hRjwU" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section><!-- End Why Us Section -->

<script>

    getData()

    async function getData() {

        let url = '/notice-data';

        const response = await axios.get(url);

        response.data.forEach((item) => {
            document.getElementById('notice-board').innerHTML += `
                    <li class="list-group-item fs-5">
                        <a href="">
                            <h5>${item.title}</h5>
                            <h5 style="color: #807f7f">প্রকাশিতঃ ${item.created_at}</h5>
                        </a>
                    </li>
        `;

        });


        // console.log(response.data)


    }
</script>
