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
                      <h5 class="mb-0">Edit New Blog Post</h5>
                      {{session('message')}}
                     
                    </div>
                    <div class="card-body">
                      <form action="{{route('blog.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating form-floating-outline mb-6">
                          <input type="text" class="form-control" value="{{$blog->title}}" name="title" required/>
                          <label for="basic-default-fullname">Title</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-6">
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Place your content?"
                            style="height: 60px" name="content" required>{{$blog->content}}</textarea>
                          <label for="basic-default-message">Content</label>
                        </div>
                       
                        <div class="form-floating form-floating-outline mb-6">
                          <input type="file" class="form-control" name='thumb_image' required  />
                          <label for="basic-default-company">Image_thumb</label>
                          <img src="{{asset($blog->thumb_image)}}" class="mt-2" alt="" height="200px" width="200px">
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
