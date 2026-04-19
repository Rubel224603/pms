
@extends('frontend.master')
@section('title')
   Blog Home Page
@endsection

@section('content')
    @include('frontend.includes.menu')
    <div class="container mt-5">
        <h1 class="text-center fw-bolder">Welcome to Our Blog</h1>
        {{--        <a href="{{route('student.all')}}" class="btn btn-success " style="margin-top: 20px;margin-bottom:
        20px;">All Student</a> --}}

        {{--        <a href="{{route('student.add.form')}}" class="btn btn-success " style="margin-top:
        20px;margin-bottom: 20px;">Add Student</a> --}}

        {{--        <form action="http://localhost:8000/api/blogs/3" method="POST"> --}}
        {{--            <!-- spoof DELETE method --> --}}
        {{--            <input type="hidden" name="_method" value="DELETE"> --}}
        {{--            <button type="submit">Delete Blog</button> --}}
        {{-- row-cols-md-3 --}}
        {{--        </form> --}}

        <div class="row g-5 mb-6">
            @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="card h-100" style="padding:20px;">
                        <img class="card-img-top" class="img-fluid" style="height:180px;"
                             src="{{ $blog->thumb_image }}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">
                                {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                {{ Str::limit($blog->content, 100) }}

                            </p>
                            <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row mb-5">
            <h5>Category Blog</h5>
            <ul class="nav nav-tabs">
                <li>
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#national">National</button>
                </li>
                <li>
                    <button class="nav-link  " data-bs-toggle="tab" data-bs-target="#profile">International</button>
                </li>
                <li>
                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#health">Health</button>
                </li>
                <li>
                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#food">food</button>
                </li>

            </ul>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="national" role="tabpanel">...National

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">...Profile

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="health" role="tabpanel">...Health

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="food" role="tabpanel">...food

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-75" style="padding:20px;">
                                <img class="card-img-top" class="img-fluid" style="height:120px;" src=""
                                     alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet con.</h5>
                                    <p class="card-text">
                                        {{-- {{ substr(strip_tags($blog->content), 0, 100) }}... --}}
                                        harum vel praesentium corporis eveniet, atque similique nemo eligendi nihil
                                        porro.

                                    </p>
                                    <a href="#">read more</a>
                                    {{-- <a href="{{ route('details', ['id' => $blog->id]) }}" class="text-center">read more</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection








