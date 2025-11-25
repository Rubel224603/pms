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
                <h5 class="mb-0">All Category</h5>
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
                            <th>Blog Name</th>
                            <th>Blog Slug</th>
                          
                          
                            <th>Action</th>

                            <th>Create time</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($categories as $category)
                           <tr>
                               <td>{{$loop->iteration}}</td>


                               {{-- <td>{{$category->user ? $category->user->name : 'Not logged In'}}</td> --}}
                               <td>{{$category->name}}</td>

                               <td>{{$category->slug}}</td>
                              
                               <td class="text-center">
                                    <a href="{{url('blog-category/edit/'.$category->id)}}" class="btn btn-warning">edit</a>
                                    <a href="{{url('blog-category/delete/'.$category->id)}}" class="btn btn-danger">delete</a>
                               </td>    
                               <td>
                                   {{ $category->created_at->diffForHumans() }}

                                   {{$category->created_at->format('h:i:a')}}
                                   {{$category->created_at->format('d:m:y')}}


                               </td>
                           </tr>

                       @endforeach

                    </tbody>



                  </table>

                  {{-- <div class="d-flex justify-content-around mt-5">
                      <a href="{{$blogs->previousPageUrl()}} " class="btn btn-primary {{request('page') ==''||request('page') ==1 ?'disabled' :''}}" > Previous</a>
                      <p>current page: {{request('page') ?:1}}</p>
                      <a href="{{$blogs->nextPageUrl()}}" class="btn btn-primary">Next</a>
                  </div> --}}





              </div>
            </div>
          </div>

        </div>




      <!-- / Content -->


    </div>


@endsection
