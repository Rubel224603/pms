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
                            <h5 class="mb-0">All Process Image List</h5>
                            <p class="text-primary"> {{session('message')}}</p>
                            <p class="text-success">{{session('update')}}</p>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($processImages as $image)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <img src="{{asset('uploads/Process-image/'.$image->image)}}" alt="" width="150px" height="100px">
                                        </td>
                                        <td>
{{--                                            <a href="{{route('blog.show',['id'=>$image->id])}}" class="btn btn-success mb-2">show</a>--}}
                                            <a href="{{route('image.edit',['id'=>$image->id,'page'=>request('page')])}}" class="btn btn-primary">edit</a>
                                            <a href="{{route('image.delete',['id'=>$image->id])}}" class="btn btn-danger mt-2" onclick=" return confirm('are you sure?')">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            <div class="d-flex justify-content-around mt-5">
                                <a href="{{$processImages->previousPageUrl()}} " class="btn btn-primary {{request('page') ==''||request('page') ==1 ?'disabled' :''}}" > Previous</a>
                                <p>current page: {{request('page') ?:1}}</p>
                                <a href="{{$processImages->nextPageUrl()}}" class="btn btn-primary">Next</a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>




            <!-- / Content -->


        </div>


@endsection
