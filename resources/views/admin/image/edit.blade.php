@extends('admin.master')
@section('body')

    <!-- / Menu -->

    <!-- Layout container -->

    <!-- Navbar -->

    <!-- / Navbar -->

    <!-- Content wrapper -->

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Process Image</h5>
                        <p class="text-primary">{{session('message')}}</p>
                        <p class="text-danger">{{session('error')}}</p>
                        <p class="text-success">{{session('success')}}</p>

                    </div>
                    <div class="card-body">
                        <form action="{{route('image.update',[$processImage->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-floating form-floating-outline mb-6">
                                <input type="file" class="form-control" name='image'   />
                                <label for="basic-default-company">Image </label>
                                <br>

                                <img src="{{asset('uploads/Process-image/'.$processImage->image)}}" alt="Process Image">
                                @error('image')
                                <p class="text-danger">{{$message}}<p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Update </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>




        <!-- / Content -->


    </div>
    <!-- Content wrapper -->

    <!-- / Layout page -->
    </div>
@endsection
