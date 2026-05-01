<nav class="p-3" aria-label="Menu lateral">

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
    </div>
    <ul class="nav nav-pills flex-column mb-4">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                Dashboard
            </a>
        </li>
    </ul>

    <button class="btn w-100 text-start text-uppercase text-muted fw-bold small mb-3 p-0 border-0 bg-transparent"
        type="button" data-bs-toggle="collapse" data-bs-target="#menuChamados" aria-expanded="true"
        aria-controls="menuChamados">
        Chamados
    </button>

    <div class="collapse show" id="menuChamados">
        <ul class="nav nav-pills flex-column mb-4">
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Todos os chamados
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Novo chamado
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Meus chamados
                </a>
            </li>
        </ul>
    </div>

    <button class="btn w-100 text-start text-uppercase text-muted fw-bold small mb-3 p-0 border-0 bg-transparent"
        type="button" data-bs-toggle="collapse" data-bs-target="#menuAdministracao" aria-expanded="true"
        aria-controls="menuAdministracao">
        Administração
    </button>

    <div class="collapse show" id="menuAdministracao">
        <ul class="nav nav-pills flex-column mb-4">
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Usuários
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Perfis de acesso
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Categorias
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Prioridades
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Status
                </a>
            </li>
        </ul>
    </div>

    <button class="btn w-100 text-start text-uppercase text-muted fw-bold small mb-3 p-0 border-0 bg-transparent"
        type="button" data-bs-toggle="collapse" data-bs-target="#menuEquipe" aria-expanded="true"
        aria-controls="menuEquipe">
        Equipe
    </button>

    <div class="collapse show" id="menuEquipe">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Chamados atribuídos
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    Painel do supervisor
                </a>
            </li>
        </ul>
    </div>
</nav>
