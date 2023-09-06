<!-- ======= About Section ======= -->
<section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>College introduction</h2>
                <p>এক নজরে কলেজ পরিচিতি</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
{{--                    <h3 id="about-title">এক নজরে কলেজ পরিচিতি</h3>--}}

                    <p id="about-para" class="text-justify">
                        ১ জানুয়ারি ১৯৬৩ সালে রংপুরের একমাত্র কলেজ ‘কারমাইকেল’ কে সরকারি করা হলে আসন সংখ্যা সীমাবদ্ধ হয়ে যায়। এই সময় পাশে কোন কলেজ না থাকায় ছাত্র-ছাত্রীরা পরে বিপাকে। ছাত্র-ছাত্রীদের চাহিদার তাগিদে কলেজের প্রয়োজন দেখা দিলে প্রফেসর এমান উদ্দিনের ঐকান্তিক প্রচেষ্টায় প্রফেসর ফুলে হোসেন, ডিসি ও এম কার্ণি, এডিসি আব্দুস সাত্তার, জেলা শিক্ষা অফিসার তাহেমেদুর রহমান (টি রহমান), এডভোকেট আবুল খাঁ, আমিন হোসেন, আবু সালেক, আবুল হোসেন, মঈন উদ্দিন সরকার এমপি এবং জেলার অনেক বিত্তবান ব্যক্তি অর্থ ও জমি দান করে কলেজটি প্রতিষ্ঠায় সহযোগীতা করেন। অতঃপর ২৫ জুলাই ১৯৬৩ সালে কলেজটি প্রতিষ্ঠিত হয়।
                    </p>

                    <p class="text-justify">
                        প্রফেসর এমাজ উদ্দিন আহমদকে অধ্যক্ষ ও প্রফেসর ফুলে হোসেনকে উপাধ্যক্ষ করে নৈশ্য কলেজ হিসেবে কৈলাশ রঞ্জন উচ্চ বিদ্যালয়ে এবং ডে কলেজ হিসেবে রাম বাবুর জমিদার বাড়িতে (কালিধাম) কলেজটির যাত্রা শুরু। কলেজটির যাত্রা লগ্ন থেকে ১৯৯২ সাল পর্যন্ত রাজশাহী বিশ্ববিদ্যালয়ের অধিভুক্ত ছিল। প্রথম দিকে আই.এ. ক্লাশ খোলার অনুমতি দিলেও কলেজটির শিক্ষার মানের উপর ভিত্তি করে ১৯৬৫ সালে বি.এ. ক্লাশ খোলার অনুমতি দেয়। ১৯৬৭ সালে...
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

<script>

    getData()

    async function getData() {

        let url = '/about-data';

        const response = await axios.get(url);

        // document.getElementById('about-title').innerText = response.data.title;
        document.getElementById('about-para').innerText = response.data.description;

        // console.log(response.data)


    }
</script>

