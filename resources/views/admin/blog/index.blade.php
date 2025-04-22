@extends('admin.master')
@section('body')

<div class="container-xxl flex-grow-1 container-p-y">




    <!--/ Basic Bootstrap Table -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
          <div class="col-xl">
            <div class="card mb-6">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">All  Blog Post</h5>
               <p class="text-primary"> {{session('message')}}</p>
                <p class="text-danger">{{session('update')}}</p>

              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>Author</th>
                        <th>Blog Title</th>
                        <th>Blog Description</th>
                        <th>Image</th>

                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)

                        <tr>
                            <td>{{Auth::user()->name}}</td>
                            <td style="width:100px;">{{$blog->title}}</td>

                            <td style="width:350px;">
                              {{$blog->content}}
                            </td>
                            <td>
                                <img src="{{asset($blog->thumb_image)}}" alt="" width="150px" height="100px">
                            </td>
                            <td>
                                  <a href="{{route('blog.show',['id'=>$blog->id])}}" class="btn btn-success">show</a>
                                  <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-primary">edit</a>
                                  <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger mt-2" onclick=" return confirm('are you sure?')">delete</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

        </div>




      <!-- / Content -->


    </div>


@endsection
