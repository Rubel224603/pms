@extends('admin.master')
@section('body')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    
    <!--/ Basic Bootstrap Table -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row" style="; margin-left:70px;">
          <div class="col-xl">
            <div class="card mb-6">
              <div class="card-header d-flex justify-content-between align-items-center">
                
                {{session('message')}}
               
              </div>
              <div class="card-body">
                
                    

                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <img src="{{asset($blog->thumb_image)}}" alt="" style="width:300px; text-center">
                                <div class="card-body">
                                <h2 class="card-title text-uppercase"> {{$blog->title}}</h2>
                                <p class="text-muted">Posted on <strong>{{$blog->created_at}}</strong> by <strong>Author Name</strong></p>
                                <p class="card-text">
                                    {{$blog->content}}
                                </p>
                               
                              </div>
                            </div>
                   
                    </div>
                    
                  
              
              
                
                </div>
            </div>
          </div>
         
        </div>

     <div class="container">
       
     </div>


     
      <!-- / Content -->


@endsection