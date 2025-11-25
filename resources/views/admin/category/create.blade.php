@extends('admin.master')
@section('body')


            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add  Blog Category</h5>
                    <p class="text-primary">{{session('message')}}</p>
                    <p class="text-danger">{{session('error')}}</p>
                    <p class="text-success">{{session('success')}}</p>

                    </div>
                    <div class="card-body">
                      <form action="{{url('blog-category/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating form-floating-outline mb-6">
                          <input type="text" class="form-control" name="name"  value="{{old('name')}}" placeholder="enter category title"/>
                          <label for="basic-default-fullname">Category Title</label>  
                            @error('title')
                               <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                     
                        <div class="form-floating form-floating-outline mb-6">
                          <input type="text" class="form-control" name="slug"  value="{{old('slug')}}" placeholder="enter category slug "/>
                          <label for="basic-default-fullname">Category slug(optional)</label>  
                            @error('slug')
                               <p class="text-danger">{{$message}}</p>
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
