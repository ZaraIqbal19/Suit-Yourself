<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suit Yourself</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/style.css') }}">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

            <a class="navbar-brand brand-box" href="#">
                <img src="{{ asset('User/images/img1.png.png') }}" class="logo" alt="Logo">
                <span>Suit Yourself</span>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-scissors"></i> Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag"></i> Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-info-circle"></i> About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-envelope"></i> Contact
                        </a>
                    </li>
                </ul>

                <div class="d-flex gap-2">
                    @guest
    <a href="/login" class="btn btn-login">
        Login
    </a>
<!-- 
    <a href="/register" class="btn btn-register">
        Register
    </a> -->
@endguest

@auth
    <a href="/logout" class="btn btn-danger">
        Logout
    </a>
@endauth
                </div>

            </div>
        </div>
    </nav>
@yield ('content');
<footer>

</footer>