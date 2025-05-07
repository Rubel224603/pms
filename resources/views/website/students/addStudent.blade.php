
</html>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>



<div class="container">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h1 class="fw-bolder">Add Students Form</h1>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form action="{{route('student.store.api')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="text-primary text-end">{{session('message')}}</p>
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Name</label>
                                <input type="text" id="simpleinput" class="form-control" name="name" placeholder="Name" required value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-password" class="form-label">Phone</label>
                                <input type="number" id="example-number" class="form-control" placeholder="phone number" name="phone" required  value="{{ old('phone') }}">
                                @error('phone')
                                <div class="text-danger">{{$message}}</div>
                                @enderror


                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Date of birth</label>
                                <input class="form-control" id="example-date" type="date" name="date_of_birth" required value="{{ old('date_of_birth') }}">

                                @error('date_of_birth')
                                <div class="text-danger">{{$message}}</div>
                                @enderror


                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary btn-lg" value="Save">
                            </div>


                        </form>
                    </div> <!-- end col -->


                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
