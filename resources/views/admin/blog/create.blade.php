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
                      <h5 class="mb-0">Add New Blog Post</h5>
                    <p class="text-primary">{{session('message')}}</p>
                    <p class="text-danger">{{session('error')}}</p>
                    <p class="text-success">{{session('success')}}</p>

                    </div>
                    <div class="card-body">
                      <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating form-floating-outline mb-6">
                          <input type="text" class="form-control" name="title"  value="{{old('title')}}"/>
                          <label for="basic-default-fullname">Title</label>
                            @error('title')
                               <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating form-floating-outline mb-6">
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Place your content?"
                             name="content" style="height: 200px;"> {{old('content')}}</textarea>
                          <label for="basic-default-message">Content</label>
                            @error('content')
                                <p class="text-danger">{{$message}}<p>
                            @enderror
                        </div>

                        <div class="form-floating form-floating-outline mb-6">
                          <input type="file" class="form-control" name='thumb_image'   />
                          <label for="basic-default-company">Image_thumb</label>
                            @error('thumb_image')
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
