
<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
    data-style="light">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Cards basic - UI elements | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('/')}}admin/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/')}}admin/assets/js/config.js"></script>
</head>

<body>

    <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row" style="; margin-left:70px;">
        <div class="col-xl">
            <div class="card mb-6">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <a href="{{route('home')}}" class="btn btn-success">Back To Home</a>
                    <h3 class="h3">Blog Details Page</h3>

                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <img src="{{asset($blog->thumb_image)}}" alt="" style="width:300px;margin-top:30px;margin-left:30px;">
                                <div class="card-body">
                                    <h2 class="card-title text-uppercase"> {{$blog->title}}</h2>
                                    <p class="card-text">
                                        {{$blog->content}}
                                    </p>
                                    <p class="text-muted">Posted on <strong>{{ $blog->created_at->toDateString() }}</strong> by <strong>{{$blog->user->name}}</strong></p>


                                </div>
                            </div>

                        </div>





                    </div>
                </div>
            </div>

        </div>




        <!-- / Content -->






</body>
