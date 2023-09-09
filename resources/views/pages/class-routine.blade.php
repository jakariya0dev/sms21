@extends('master-page')

@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section-title">
                        <h2>Class Routine</h2>
                        <p>ক্লাস রুটিন</p>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center mx-auto">
                            <iframe src="{{ asset('files/notice/1694244415.pdf') }}" width="100%" height="1000">
                                This browser does not support PDFs. Please download the PDF to view it: <a
                                    href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

            getData()

            async function getData() {

                let url = '/notice-data';

                const response = await axios.get(url);

                // console.log(response.data)

            }
        </script>
    </section><!-- End Why Us Section -->
@endsection
