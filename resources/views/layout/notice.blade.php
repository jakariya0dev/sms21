<!-- ======= Why Us Section ======= -->
<section id="notice">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title">
                    <h2>Notice Board</h2>
                    <p>নোটিশ বোর্ড</p>
                </div>
                <ul class="list-group list-group-flush" id="notice-board"></ul>
                <a href="" class="btn btn-sm btn-primary mt-2">সবগুলো নোটিশ দেখুন</a>
            </div>
            <div class="col-md-4">
                <iframe id="y-video" class="w-100 h-100" src="https://www.youtube.com/embed/YuAya0hRjwU" allowfullscreen></iframe>
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
                            <p style="color: #807f7f; font-size: 12px">প্রকাশিতঃ ${item.created_at}</p>
                        </a>
                    </li>
        `;

        });

        // console.log(response.data)

    }
</script>
