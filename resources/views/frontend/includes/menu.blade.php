<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="#">MyBlog</a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tech</a></li>
                        <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>

            <!-- Search -->
            <form class="d-flex me-3">
                <input class="form-control me-2" type="search" placeholder="Search...">
                <button class="btn btn-outline-primary">Search</button>
            </form>

            <!-- Auth -->
            <a href="{{route('login')}}" class="btn btn-outline-secondary me-2">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary">Register</a>

        </div>
    </div>
</nav>
