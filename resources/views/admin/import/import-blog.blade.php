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
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Import Blog Data</h5>
                        <p class="text-primary">{{session('message')}}</p>
                        <p class="text-danger">{{session('error')}}</p>
                        <p class="text-success">{{session('success')}}</p>

                    </div>
                    <div class="card-body">
                        <form action="{{route('import-blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-floating form-floating-outline ">
                                <input type="file" class="form-control" name='excel_file'  accept=".xlsx" />
                                <label for="basic-default-company">excel_file </label>
                                @error('excel_file')
                                <p class="text-danger">{{$message}}<p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Save </button>
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
