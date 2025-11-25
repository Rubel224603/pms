<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('/') }}backend/assets/" data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Dashboard eTrade</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/materio-bootstrap-html-admin-template/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/fonts/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/fonts/flag-icons.css">


    <link href="{{ asset('/') }}backend/assets/vendor/summernote/summernote.min.css" rel="stylesheet">

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/libs/node-waves/node-waves.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/vendor/libs/apex-charts/apex-charts.css">

    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="{{ asset('/') }}backend/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/') }}backend/assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/') }}backend/assets/js/config.js"></script>
</head>

<body>

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









    <script src="{{ asset('/') }}backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('/') }}backend/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->
    <script src="{{ asset('/') }}backend/assets/vendor/summernote/summernote.min.js"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('/') }}backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('/') }}backend/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('/') }}backend/assets/js/dashboards-analytics.js"></script>
</body>

</html>
