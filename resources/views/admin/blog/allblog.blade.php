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
                 <div>
                     <from class="d-flex justify-content-between" action="{{route('blog.all')}}" method="GET">
                         @csrf
                         <input type="search" class="form-control" style="width:300px !important;margin-right:10px; !important" >
                         <input type="submit" class="btn btn-success bg-success" value="Search" style="" >
                     </from>

                 </div>
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
                       @foreach($blogs as $key=> $blog)
                           <tr>
                               <td>{{ $blogs->firstItem()+ $key }}</td>


                               <td>{{$blog->user->name}}</td>
                               <td>{{$blog->title}}</td>

                               <td>{{$blog->content}}</td>
                               <td>
                                   <img src="{{asset($blog->thumb_image)}}" alt="" height="100" width="150">
                               </td>
                               <td class="text-center">

                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.show',['id'=>$blog->id]) : '#'}}" class="btn btn-success"
                                      @if($blog->user_id != Auth::user()->id)
                                        onclick="alert('You are not access this.'); return false;"
                                       @endif>
                                       show
                                   </a>
                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.edit',['id'=>$blog->id]) : '#'}}" class="btn btn-primary mt-2"
                                      @if($blog->user_id != Auth::user()->id)
                                        onclick="alert('You have to not access to edit this.'); return false;"
                                       @endif >edit
                                   </a>

                                   <a href="{{$blog->user_id==Auth::user()->id ? route('blog.delete',['id'=>$blog->id]) : '#'}}" class="btn btn-danger mt-2"
                                      @if($blog->user_id != Auth::user()->id)
                                      onclick="alert('You have to not access to delete this.'); return false;"
                                      @else
                                      onclick="alert('Are you sure.'); return true;"
                                       @endif >Delete
                                    </a>

                               </td>
                               <td>
                                   {{ $blog->created_at->diffForHumans() }}

                                   {{$blog->created_at->format('h:i:a')}}
                                   {{$blog->created_at->format('d:m:y')}}


                               </td>
                           </tr>

                       @endforeach

                    </tbody>



                  </table>
                  <div class="d-flex justify-content-around mt-5">
                    @if($blogs->onFirstPage())

                      @else
                          <a href="{{ $blogs->previousPageUrl() }}">Previous</a>
                      @endif

                      @if($blogs->onLastPage())
                          @else
                           <a href="{{$blogs->nextPageUrl()}}" >Next</a>

                       @endif
                  </div>


              </div>
            </div>
          </div>

        </div>




      <!-- / Content -->


    </div>


@endsection
