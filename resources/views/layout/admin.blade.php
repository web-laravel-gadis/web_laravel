<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        body {
            background: #f5f6fa;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            min-height: 100vh;
            background: #212529;
            color: white;
        }

        .sidebar .logo {
            font-size: 22px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 14px 20px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #0d6efd;
        }

        .sidebar hr {
            border-color: #6c757d;
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Topbar */
        .topbar {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .mobile-menu {
                display: inline-block;
            }
        }

        @media (min-width: 769px) {
            .mobile-menu {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            Admin Panel
        </div>

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2 me-2"></i>
            Dashboard
        </a>

        <!-- Kategori Artikel -->

<a href="{{ route('kategori.index') }}"
    class="nav-link text-white">
    <i class="bi bi-folder-fill me-2"></i>
    Kategori Artikel
</a>


        <!-- Artikel -->
        <a href="{{ route('artikel.index') }}">
            <i class="bi bi-newspaper"></i>
            Artikel
        </a>
        <hr>

        <!-- Lihat Website -->
        <a href="#">
            <i class="bi bi-globe"></i>
            Lihat Website
        </a>

        <!-- Logout -->
        <a href="#">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between align-items-center">

            <div>
                <button class="btn btn-dark mobile-menu">
                    <i class="bi bi-list"></i>
                </button>

                <span class="fs-5 fw-bold">
                    Dashboard Administrator
                </span>
            </div>

            <div>
                Administrator
            </div>

        </div>

        <!-- ISI HALAMAN -->
        @yield('content')

    </div>

</body>

</html>