@extends('admin.master')
@section('body')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <p class="text-danger"> {{session('message')}}</p>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Blog Title</th>
              <th>Blog Description</th>
              <th>Image</th>
            
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->title}}</td>
                
                <td>
                  {{$blog->content}}
                </td>
                <td>
                    <img src="{{asset($blog->thumb_image)}}" alt="" width="200px" height="100px">
                </td>
                <td>
                      <a href="{{route('blog.show',['id'=>$blog->id])}}" class="btn btn-success">show</a>
                      <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-primary">edit</a>
                      <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger" onclick=" return confirm('are you sure?')">delete</a>
                </td>
              </tr>
            @endforeach
            
            
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->



@endsection