<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Akademik') }}</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Soft Pink + Deep Pink Color Scheme */
        :root {
            --soft-pink: #fbcfe8;
            --soft-pink-medium: #f9a8d4;
            --pink-tua: #ec4899;
            --pink-tua-dark: #db2777;
            --pink-accent: #be185d;
        }

        body {
            background-color: #fce7f3;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
        }

        /* Sidebar Styling - COMPACT */
        #sidebar-wrapper {
            background: linear-gradient(180deg, #ec4899 0%, #db2777 100%) !important;
            border-right: none !important;
            box-shadow: 2px 0 8px rgba(0,0,0,0.1);
        }

        .sidebar-heading {
            padding: 1.2rem 1rem;
            font-size: 1.1rem;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sidebar-heading::before {
            content: '🏥';
            font-size: 1.4rem;
        }

        .list-group-item {
            background-color: transparent !important;
            border: none !important;
            color: rgba(255,255,255,0.9) !important;
            padding: 0.7rem 1rem;
            transition: all 0.2s ease;
            font-weight: 500;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .list-group-item::before {
            font-size: 1.2rem;
        }

        .list-group-item:nth-child(1)::before { content: '🏠'; }
        .list-group-item:nth-child(2)::before { content: '👨‍👩‍👧‍👦'; }
        .list-group-item:nth-child(3)::before { content: '👶'; }
        .list-group-item:nth-child(4)::before { content: '⚖️'; }
        .list-group-item:nth-child(5)::before { content: '🚪'; }

        .list-group-item:hover {
            background-color: rgba(255,255,255,0.15) !important;
            color: white !important;
            padding-left: 1.3rem;
        }

        .list-group-item.active {
            background-color: rgba(255,255,255,0.2) !important;
            color: white !important;
            border-left: 3px solid white !important;
        }

        /* Top Navbar - COMPACT */
        .navbar {
            background-color: white !important;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
            padding: 0.6rem 1rem;
        }

        #menu-toggle {
            background: linear-gradient(135deg, #ec4899 0%, #db2777 100%) !important;
            border: none !important;
            border-radius: 6px;
            padding: 0.4rem 0.6rem;
            transition: all 0.2s ease;
        }

        #menu-toggle:hover {
            background: #db2777 !important;
            transform: scale(1.05);
        }

        #menu-toggle i {
            font-size: 1.1rem;
        }

        /* Content Area - COMPACT */
        #page-content-wrapper {
            width: 100%;
            background-color: #fce7f3;
        }

        .container-fluid.p-4 {
            background-color: white;
            margin: 1rem;
            padding: 1.5rem !important;
            border-radius: 10px;
            box-shadow: 0 1px 8px rgba(236, 72, 153, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            #sidebar-wrapper {
                margin-left: -15rem;
            }
            
            #wrapper.toggled #sidebar-wrapper {
                margin-left: 0;
            }
        }
    </style>

</head>

<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-primary border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white">Posyandu Sejahtera</div>

            <div class="list-group list-group-flush">
                <a href="{{ url('dashboard') }}" class="list-group-item list-group-item-action {{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ url('keluarga') }}" class="list-group-item list-group-item-action {{ Request::is('keluarga') ? 'active' : '' }}">Keluarga</a>
                <a href="{{ url('balita') }}" class="list-group-item list-group-item-action {{ Request::is('balita') ? 'active' : '' }}">Balita</a>
                <a href="{{ url('penimbangan') }}" class="list-group-item list-group-item-action {{ Request::is('penimbangan') ? 'active' : '' }}">Penimbangan</a>

                <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>