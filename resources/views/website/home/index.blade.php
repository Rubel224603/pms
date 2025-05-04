
<!doctype html>

<html lang="en">
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

    <div class="container mt-5">
        <h1 class="text-center fw-bolder">Welcome to Our Blog</h1>
{{--        <form action="http://localhost:8000/api/blogs/3" method="POST">--}}
{{--            <!-- spoof DELETE method -->--}}
{{--            <input type="hidden" name="_method" value="DELETE">--}}
{{--            <button type="submit">Delete Blog</button>--}}
{{--        </form>--}}

        <div class="row row-cols-1 row-cols-md-3 g-6 mb-6">
            @foreach($blogs as $blog)
            <div class="col">
                <div class="card h-100" style="padding:20px;">
                    <img class="card-img-top"  style="margin-top:50px;" src="{{$blog->thumb_image}}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">
                            {{ substr(strip_tags($blog->content), 0, 100) }}...
                        </p>
                        <a href="{{route('details',['id'=>$blog->id])}}" class="text-center">read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>










    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('/')}}admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('/')}}admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('/')}}admin/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('/')}}admin/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{asset('/')}}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('/')}}admin/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('/')}}admin/assets/vendor/libs/masonry/masonry.js"></script>

    <!-- Main JS -->
    <script src="{{asset('/')}}admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
