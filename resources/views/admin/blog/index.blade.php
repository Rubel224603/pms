@extends('admin.master')
@section('body')

<div class="container-xxl flex-grow-1 container-p-y">




    <!--/ Basic Bootstrap Table -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
          <div class="col-xl">
            <div class="card mb-6">
              <div class="card-header">
                  <div class="d-flex justify-content-between ">
                      <h5 class="mb-0">All Blog Post</h5>
                      <a href="{{ route('export.blog') }}" class="btn btn-success">  <i class="fa-solid fa-file-arrow-down"  style="margin-right:5px !important;"></i> Export All Blog Data</a>
                  </div>

                  <p class="text-primary"> {{session('message')}}</p>
                   <p class="text-success">{{session('update')}}</p>

                </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>Sl</th>
                          <th>Author</th>
                        <th>Blog Title</th>
                        <th>Blog Description</th>
                        <th>Image</th>

                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key=>$blog)

                        <tr>
                            <td>{{ $blogs->firstItem() + $key }}</td>
                            <td>{{Auth::user()->name}}</td>
                            <td style="width:100px;">{{$blog->title}}</td>

                            <td style="width:350px;">
                              {{$blog->content}}
                            </td>
                            <td>
                                <img src="{{asset($blog->thumb_image)}}" alt="" width="150px" height="100px">
                            </td>
                            <td>
                                  <a href="{{route('blog.show',['id'=>$blog->id])}}" class="btn btn-success mb-2">show</a>
                                  <a href="{{route('blog.edit',['id'=>$blog->id,'page'=>request('page')])}}" class="btn btn-primary">edit</a>
                                  <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger mt-2" onclick=" return confirm('are you sure?')">delete</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>

                  </table>
                  <div class="d-flex justify-content-around mt-5">
                      <a href="{{$blogs->previousPageUrl()}} " class="btn btn-primary {{request('page') ==''||request('page') ==1 ?'disabled' :''}}" > Previous</a>
                     <p>current page: {{request('page') ?:1}}</p>
                      <a href="{{$blogs->nextPageUrl()}}" class="btn btn-primary">Next</a>
                  </div>


              </div>
            </div>
          </div>

        </div>




      <!-- / Content -->


    </div>


@endsection
