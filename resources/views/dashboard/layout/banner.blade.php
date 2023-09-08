@extends('dashboard.dash')

@section('content')

    <section>
        <h1>ব্যানার</h1>

        <!-- general form elements -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/banner-update') }}" method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="banner-title">প্রতিষ্ঠানের নামঃ</label>
                            <input name="banner-title" type="text" class="form-control" id="banner-title" placeholder="Ex: বদরগঞ্জ সরকারি কলেজ">
                        </div>
                        <div class="form-group">
                            <label for="banner-subtitle">সাব টাইটেল</label>
                            <input name="banner-subtitle" type="text" class="form-control" id="banner-subtitle" placeholder="Ex: স্থাপিত: ১৯৯০ সাল">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">লোগো (520 x 520)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="banner-logo" type="file" class="custom-file-input" id="banner-logo">
                                    <label class="custom-file-label" for="banner-logo">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">ব্যানার (600 x 160)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="banner-bg" type="file" class="custom-file-input" id="banner-bg">
                                    <label class="custom-file-label" for="banner-bg">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>

        getBannerData()

        async function getBannerData(){
            let url = '/banner-data';
            const response = await axios.get(url);
            document.getElementById('banner-title').value = response.data.title;
            document.getElementById('banner-subtitle').value = response.data.subtitle;

        }

        // document.getElementById('banner-form').addEventListener('submit', async (event) => {
        //     // let url = '/banner-update';
        //     // const response = await axios.put(url, {
        //     //     title: document.getElementById('banner-title').value,
        //     //     subtitle: document.getElementById('banner-subtitle').value,
        //     //     logo: document.getElementById('banner-logo').file(),
        //     //     banner_bg: document.getElementById('banner-bg').file(),
        //     //
        //     // });
        //
        //     alert('document.getElementById('banner-logo').file()')
        //
        // })

    </script>
@endsection

