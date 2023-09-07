<!-- ======= Administration Section ======= -->

<section class="team-section py-5">
    <div class="container">

        <div class="section-title">
            <h2>Message</h2>
            <p>বাণী</p>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                    <div class="card-body p-4">
                        <div class="member-profile position-absolute w-100 text-center">
                            <img id="admin-img-1" class="rounded-circle mx-auto d-inline-block shadow-sm" src="" alt="">
                        </div>
                        <div class="card-text pt-1">
                            <h5 id="admin-name-1" class="member-name mb-0 text-center text-primary font-weight-bold"></h5>
                            <div id="admin-designation-1" class="mb-3 text-center"></div>
                            <p id="admin-message-1" style="max-height: 150px; overflow: hidden; text-overflow: ellipsis"></p>
                        </div>
                    </div><!--//card-body-->
                    <div class="card-footer theme-bg-primary border-0 text-center">
                        <a href="">বিস্তারিত পড়ুন</a>
                    </div><!--//card-footer-->
                </div><!--//card-->
            </div><!--//col-->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                    <div class="card-body p-4">
                        <div class="member-profile position-absolute w-100 text-center">
                            <img id="admin-img-2" class="rounded-circle mx-auto d-inline-block shadow-sm" src="" alt="">
                        </div>
                        <div class="card-text pt-1">
                            <h5 id="admin-name-2" class="member-name mb-0 text-center text-primary font-weight-bold"></h5>
                            <div id="admin-designation-2" class="mb-3 text-center"></div>
                            <p id="admin-message-2" style="max-height: 150px; overflow: hidden; text-overflow: ellipsis"></p>
                        </div>
                    </div><!--//card-body-->
                    <div class="card-footer theme-bg-primary border-0 text-center">
                        <a href="">বিস্তারিত পড়ুন</a>
                    </div><!--//card-footer-->
                </div><!--//card-->
            </div><!--//col-->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                    <div class="card-body p-4">
                        <div class="member-profile position-absolute w-100 text-center">
                            <img id="admin-img-3" class="rounded-circle mx-auto d-inline-block shadow-sm" src="" alt="">
                        </div>
                        <div class="card-text pt-1">
                            <h5 id="admin-name-3" class="member-name mb-0 text-center text-primary font-weight-bold"></h5>
                            <div id="admin-designation-3" class="mb-3 text-center"></div>
                            <p id="admin-message-3" style="max-height: 150px; overflow: hidden; text-overflow: clip"></p>
                        </div>
                    </div><!--//card-body-->
                    <div class="card-footer theme-bg-primary border-0 text-center">
                        <a href="">বিস্তারিত পড়ুন</a>
                    </div><!--//card-footer-->
                </div><!--//card-->
            </div><!--//col-->
        </div><!--//row-->

    </div>

</section>


<script>

    getData()

    async function getData() {

        let url = '/administration-data';

        const response = await axios.get(url);

        document.getElementById('admin-img-1').src = `{{ asset('images/admin/${response.data.president_image}') }}`;
        document.getElementById('admin-name-1').innerHTML = response.data.president_name;
        document.getElementById('admin-designation-1').innerHTML = response.data.president_designation;
        document.getElementById('admin-message-1').innerHTML = response.data.president_message;

        document.getElementById('admin-img-2').src = `{{ asset('images/admin/${response.data.principal_image}') }}`;
        document.getElementById('admin-name-2').innerHTML = response.data.principal_name;
        document.getElementById('admin-designation-2').innerHTML = response.data.principal_designation;
        document.getElementById('admin-message-2').innerHTML = response.data.principal_message;

        document.getElementById('admin-img-3').src = `{{ asset('images/admin/${response.data.vice_principal_image}') }}`;
        document.getElementById('admin-name-3').innerHTML = response.data.vice_principal_name;
        document.getElementById('admin-designation-3').innerHTML = response.data.vice_principal_designation;
        document.getElementById('admin-message-3').innerHTML = response.data.vice_principal_message;

        console.log(response.data)


    }
</script>
