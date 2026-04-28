<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'SupportDesk')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-light">

   @include('partials.navbar')

    <main class="container-fluid py-4">
        <div class="row">
            <aside class="col-md-3 col-lg-2 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold">
                        Menu
                    </div>

                    <div class="list-group list-group-flush">
                        <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>
                        <a href="/tickets" class="list-group-item list-group-item-action">Chamados</a>
                        <a href="/tickets/create" class="list-group-item list-group-item-action">Novo chamado</a>
                        <a href="/admin/users" class="list-group-item list-group-item-action">Usuários</a>
                        <a href="/admin/categories" class="list-group-item list-group-item-action">Categorias</a>
                    </div>
                </div>
            </aside>

            <section class="col-md-9 col-lg-10">

                @include('partials.alert')

                @yield('content')
            </section>
        </div>
    </main>

    <footer class="bg-white border-top py-3">
        <div class="container-fluid text-center text-muted small">
            SupportDesk - Sistema Help Desk de estudos
        </div>
    </footer>

</body>

</html>
