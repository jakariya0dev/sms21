@extends('master-page')

@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="section-title">
                        <h2>Notice Board</h2>
                        <p>নোটিশ বোর্ড</p>
                    </div>

                    <div class="container">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>

                            </thead>
                            <tbody id="notice-tile">
                            @foreach($data as $item)

                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{ $item->title }}</td>
                                    <td><a href="{{ url('/download-notice/'.$item->id) }}">Download</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>

            // getData()

            async function getData() {

                let url = '/notice-data';

                const response = await axios.get(url);

                response.data.forEach((item) => {
                    document.getElementById('notice-tile').innerHTML += `
                <tr>
                    <th scope="row">${item.id}</th>
                    <td>${item.title}</td>
                    <td><a href="{{ url('/download-notice/${item.id}') }}">Download</a></td>
                </tr>
        `;

                });

                // console.log(response.data)

            }
        </script>
    </section><!-- End Why Us Section -->
@endsection
