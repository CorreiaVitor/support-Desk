<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupportDesk</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <div class="min-vh-100 d-flex flex-column">
        @include('partials.navbar')

        <div class="container-fluid flex-grow-1">
            <div class="row">
                <aside id="sidebarMenu" class="collapse d-md-block col-12 col-md-3 col-lg-2 bg-white border-end p-0 sidebar-area">
                    @include('partials.sidebar')
                </aside>

                <main class="col-12 col-md-9 col-lg-10 p-4">
                    @include('partials.alert')
                    @yield('content')
                </main>
            </div>
        </div>

        @include('partials.footer')
    </div>
</body>

</html>
