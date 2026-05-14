<div class="p-3">
    <div class="mb-4">
        <h6 class="text-uppercase text-muted fw-bold small mb-3">
            Principal
        </h6>

        <div class="d-md-none border-bottom pb-3 mb-3">
            <p class="text-muted small mb-2">
                Usuário fictício: João Administrador
            </p>

            <div class="d-flex align-items-center gap-2">
                <span class="badge text-bg-primary">
                    Administrador
                </span>

                <a href="#" class="btn btn-outline-dark btn-sm">
                    Sair
                </a>
            </div>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : 'text-dark' }}">
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>

        <div class="mb-4">
            <h6 class="text-uppercase text-muted fw-bold small mb-3">
                Chamados
            </h6>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="{{ route('tickets.index') }}"
                        class="nav-link {{ request()->routeIs('tickets.index') ? 'active' : 'text-dark' }}">
                        Todos os chamados
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tickets.create') }}"
                        class="nav-link {{ request()->routeIs('tickets.create') ? 'active' : 'text-dark' }}">
                        Novo chamado
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.tickets.index') }}"
                        class="nav-link {{ request()->routeIs('user.tickets.index') ? 'active' : 'text-dark' }}">
                        Meus chamados
                    </a>
                </li>
            </ul>
        </div>

        <div class="mb-4">
            <h6 class="text-uppercase text-muted fw-bold small mb-3">
                Administração
            </h6>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : 'text-dark' }}">
                        Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.profiles.index') }}"
                        class="nav-link {{ request()->routeIs('admin.profiles.*') ? 'active' : 'text-dark' }}">
                        Perfis de acesso
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : 'text-dark' }}">
                        Categorias
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.priorities.index') }}"
                        class="nav-link {{ request()->routeIs('admin.priorities.*') ? 'active' : 'text-dark' }}">
                        Prioridades
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.statuses.index') }}"
                        class="nav-link {{ request()->routeIs('admin.statuses.*') ? 'active' : 'text-dark' }}">
                        Status
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h6 class="text-uppercase text-muted fw-bold small mb-3">
                Equipe
            </h6>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="{{ route('technician.tickets.index') }}"
                        class="nav-link {{ request()->routeIs('technician.tickets.*') ? 'active' : 'text-dark' }}">
                        Chamados atribuídos
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('supervisor.dashboard') }}"
                        class="nav-link {{ request()->routeIs('supervisor.dashboard') ? 'active' : 'text-dark' }}">
                        Painel do supervisor
                    </a>
                </li>
            </ul>
        </div>
    </div>
