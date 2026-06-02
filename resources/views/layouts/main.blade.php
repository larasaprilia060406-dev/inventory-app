<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand fw-bold"
                href="{{ route('home') }}">
                Inventory App
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
                id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('products.index') }}">
                            Product
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">
                            Category
                        </a>
                    </li>

                    @if(Auth::check())

                    <li class="nav-item">
                        <span class="nav-link text-info">
                            {{ Auth::user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-warning"
                            href="{{ route('logout') }}">
                            Logout
                        </a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link text-success"
                            href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                    @endif

                </ul>

            </div>

        </div>

    </nav>

    <!-- CONTENT -->
    <main class="container my-5 flex-grow-1">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if(session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
        @endif

        @yield('content')

    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">

        <div class="container">

            <p class="mb-0">
                © {{ date('Y') }} Inventory App - Manajemen Informasi PNP
            </p>

        </div>

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>