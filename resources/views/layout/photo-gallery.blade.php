<section id="photo-gallery">
    <div class="container profile">

        <div class="section-title">
            <h2>Photo gallery</h2>
            <p>ফটো গ্যালারী</p>
        </div>

        <div class="profile-img-list">
            <div class="profile-img-list-item "><a href="#" id="pg-image1" class="profile-img-list-link"><span class="profile-img-content" ></span></a></div>
            <div class="profile-img-list-item "><a href="#" id="pg-image2" class="profile-img-list-link"><span class="profile-img-content" ></span></a></div>
            <div class="profile-img-list-item "><a href="#" id="pg-image3" class="profile-img-list-link"><span class="profile-img-content" ></span></a></div>
            <div class="profile-img-list-item "><a href="#" id="pg-image4" class="profile-img-list-link"><span class="profile-img-content"></span></a></div>
            <div class="profile-img-list-item"><a href="#" id="pg-image5" class="profile-img-list-link"><span class="profile-img-content"></span></a></div>
            <div class="profile-img-list-item"><a href="#" id="pg-image6" class="profile-img-list-link"><span class="profile-img-content"></span></a></div>
            <div class="profile-img-list-item"><a href="#" id="pg-image7" class="profile-img-list-link"><span class="profile-img-content"></span></a></div>
            <div class="profile-img-list-item"><a href="#" class="profile-img-list-link"><span id="pg-image8" class="profile-img-content" ></span></a></div>
        </div>
    </div>
</section>

<script>

    getData()

    async function getData() {

        let url = '/photo-gallery-data';

        const response = await axios.get(url);

        document.getElementById('pg-image1').style.backgroundImage = `url({{ asset('images/gallery/photo-1/${response.data.image_1}') }})`;
        document.getElementById('pg-image2').style.backgroundImage = `url({{ asset('images/gallery/photo-2/${response.data.image_2}') }})`;
        document.getElementById('pg-image3').style.backgroundImage = `url({{ asset('images/gallery/photo-3/${response.data.image_3}') }})`;
        document.getElementById('pg-image4').style.backgroundImage = `url({{ asset('images/gallery/photo-4/${response.data.image_4}') }})`;
        document.getElementById('pg-image5').style.backgroundImage = `url({{ asset('images/gallery/photo-5/${response.data.image_5}') }})`;
        document.getElementById('pg-image6').style.backgroundImage = `url({{ asset('images/gallery/photo-6/${response.data.image_6}') }})`;
        document.getElementById('pg-image7').style.backgroundImage = `url({{ asset('images/gallery/photo-7/${response.data.image_7}') }})`;
        document.getElementById('pg-image8').style.backgroundImage = `url({{ asset('images/gallery/photo-8/${response.data.image_8}') }})`;

    }
</script>
