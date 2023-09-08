
{{-- Banner Section--}}
<section id="banner" style="padding-top: 0 !important;">
    <div class="container" id="banner-bg">
        <div class="img-overlay">
            <div class="logo">
                <img id="main-logo" alt="" class="img-fluid logo-img"  src="">
            </div>
            <h1 id="banner-title"></h1>
            <h5 id="banner-subtitle"></h5>
        </div>
    </div>
</section>

<script>

    getData()

    async function getData(){
        let url = '/banner-data';
        const response = await axios.get(url);

        document.getElementById('banner-title').innerText = response.data.title;
        document.getElementById('banner-subtitle').innerText = response.data.subtitle;
        document.getElementById('main-logo').src = `{{ asset('images/logo/${response.data.logo}') }}`;
        document.getElementById('banner-bg').style.backgroundImage = `url('{{ asset('images/banner/${response.data.banner_bg}') }}')`;
        // console.log(response.data);
    }
</script>
