@extends('admin.master')
@section('body')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card" style="margin-top:-200px;margin-left:100px;">
      <h5 class="card-header">Single Post</h5>
      
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Blog Title</th>
              <th>Blog Description</th>
              <th>Image</th>
            
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
         
              <tr>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>
                    <img src="{{asset($blog->thumb_image)}}" alt="" height="200" widht="200">
                </td>
              </tr>

          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->



@endsection