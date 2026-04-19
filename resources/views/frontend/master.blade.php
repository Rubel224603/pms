<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
      data-theme="theme-default" data-assets-path="{{ asset('/') }}backend/assets/" data-template="vertical-menu-template"
      data-style="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('frontend.includes.style')
</head>

<body>

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.scripts')
</body>

</html>
