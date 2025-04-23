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
                          <th>Sl</th>
                            <th> Name</th>
                            <th>Blog Title</th>
                            <th>Blog Description</th>
                            <th>Image</th>
                            <th>Action</th>

                            <th>Create time</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($blogs as $blog)
                           <tr>
                               <td>{{$loop->iteration }}</td>


                               <td>{{$blog->user->name}}</td>
                               <td>{{$blog->title}}</td>

                               <td>{{$blog->content}}</td>
                               <td>
                                   <img src="{{asset($blog->thumb_image)}}" alt="" height="100" width="150">
                               </td>
                               <td>

                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.show',['id'=>$blog->id]) : '#'}}" class="btn btn-success"
                                      @if($blog->user_id != Auth::user()->id)
                                        onclick="alert('You are not access this.'); return false;"
                                       @endif>
                                       show
                                   </a>
                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.edit',['id'=>$blog->id]) : '#'}}" class="btn btn-primary mt-2"
                                      @if($blog->user_id != Auth::user()->id)
                                        onclick="alert('You are not access this.'); return false;"
                                       @endif >edit
                                   </a>

                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.delete',['id'=>$blog->id]) : '#'}}" class="btn btn-danger mt-2"
                                      @if($blog->user_id != Auth::user()->id)
                                      onclick="alert('You are not access this.'); return false;"
                                      @else
                                      onclick="alert('Are you sure.'); return true;"
                                       @endif >edit


                                     delete
                                   </a>

                               </td>
                               <td>{{$blog->created_at->format('d M Y,H:i')}}</td>
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
