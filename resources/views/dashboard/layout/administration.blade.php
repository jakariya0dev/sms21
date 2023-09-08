@extends('dashboard.dash')

@section('content')

    <section>

        <!-- President -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">সভাপতি</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/administration-update', 1) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name-1">নামঃ</label>
                            <input name="name-1" type="text" class="form-control" id="name-1" required>
                        </div>
                        <div class="form-group">
                            <label for="designation-1">পদবীঃ</label>
                            <input name="designation-1" type="text" class="form-control" id="designation-1" placeholder="সভাপতি" required>
                        </div>
                        <div class="form-group">
                            <label for="message-1">বাণীঃ</label>
                            <input name="message-1" type="text" class="form-control" id="message-1" required>
                        </div>
                        <div class="form-group">
                            <label for="image-1">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-1" type="file" class="form-control" id="image-1">
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

        <!-- Principal -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">প্রিন্সিপাল</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data"  action="{{ url('/administration-update', 2) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name-2">নামঃ</label>
                            <input name="name-2" type="text" class="form-control" id="name-2" required>
                        </div>
                        <div class="form-group">
                            <label for="designation-2">পদবীঃ</label>
                            <input name="designation-2" type="text" class="form-control" id="designation-2" placeholder="সভাপতি" required>
                        </div>
                        <div class="form-group">
                            <label for="message-2">বাণীঃ</label>
                            <input name="message-2" type="text" class="form-control" id="message-2" required>
                        </div>
                        <div class="form-group">
                            <label for="image-2">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-2" type="file" class="form-control" id="image-2">
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

        <!-- Vice President -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ভাইস প্রিন্সিপাল</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form2" action="{{ url('/administration-update', 3) }}" method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name-3">নামঃ</label>
                            <input name="name-3" type="text" class="form-control" id="name-3" required>
                        </div>
                        <div class="form-group">
                            <label for="designation-3">পদবীঃ</label>
                            <input name="designation-3" type="text" class="form-control" id="designation-3" placeholder="সভাপতি" required>
                        </div>
                        <div class="form-group">
                            <label for="message-3">বাণীঃ</label>
                            <input name="message-3" type="text" class="form-control" id="message-3" required>
                        </div>
                        <div class="form-group">
                            <label for="image-3">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-3" type="file" class="form-control" id="image-3">
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

        getAdministrationData()

        async function getAdministrationData(){

            let url = '/administration-data';
            const response = await axios.get(url);

            document.getElementById('name-1').value = response.data[0].name;
            document.getElementById('designation-1').value = response.data[0].designation;
            document.getElementById('message-1').value = response.data[0].message;

            document.getElementById('name-2').value = response.data[1].name;
            document.getElementById('designation-2').value = response.data[1].designation;
            document.getElementById('message-2').value = response.data[1].message;

            document.getElementById('name-3').value = response.data[2].name;
            document.getElementById('designation-3').value = response.data[2].designation;
            document.getElementById('message-3').value = response.data[2].message;

        }

    </script>
@endsection
