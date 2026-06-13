@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Meus chamados</h1>
            <p class="text-muted mb-0">
                Visão visual dos chamados abertos pelo usuário comum.
            </p>
        </div>

        <a href="{{ route('tickets.create') }}" class="btn btn-primary">
            Abrir novo chamado
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Total</span>
                    <h2 class="h4 mt-2 mb-0">5</h2>
                    <span class="badge text-bg-secondary mt-3">
                        Meus registros
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Abertos</span>
                    <h2 class="h4 mt-2 mb-0">2</h2>
                    <span class="badge text-bg-warning mt-3">
                        Aguardando suporte
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Em atendimento</span>
                    <h2 class="h4 mt-2 mb-0">1</h2>
                    <span class="badge text-bg-info mt-3">
                        Com técnico
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Resolvidos</span>
                    <h2 class="h4 mt-2 mb-0">2</h2>
                    <span class="badge text-bg-success mt-3">
                        Finalizados
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-md-5">
                        <label for="search" class="form-label">Buscar nos meus chamados</label>
                        <input
                            type="text"
                            id="search"
                            class="form-control"
                            placeholder="Ex: impressora, e-mail, sistema..."
                        >
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Aberto</option>
                            <option>Em andamento</option>
                            <option>Aguardando usuário</option>
                            <option>Resolvido</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-3 d-flex align-items-end">
                        <button type="button" class="btn btn-outline-secondary w-100">
                            Filtrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Minhas solicitações</h2>

            <span class="badge text-bg-secondary">
                5 chamados
            </span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Número</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Prioridade</th>
                            <th>Status</th>
                            <th>Técnico</th>
                            <th>Criado em</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>#1002</td>
                            <td>Erro ao acessar o sistema financeiro</td>
                            <td>Sistemas</td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Crítica
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-info">
                                    Em andamento
                                </span>
                            </td>
                            <td>Ana Suporte</td>
                            <td>01/05/2026</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1005</td>
                            <td>Usuário sem acesso ao e-mail</td>
                            <td>Acessos</td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Alta
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Aberto
                                </span>
                            </td>
                            <td>Não atribuído</td>
                            <td>01/05/2026</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1007</td>
                            <td>Solicitação de criação de usuário</td>
                            <td>Acessos</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Baixa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">
                                    Resolvido
                                </span>
                            </td>
                            <td>Ana Suporte</td>
                            <td>30/04/2026</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1012</td>
                            <td>Impressora não aparece na lista</td>
                            <td>Impressoras</td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Média
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Aberto
                                </span>
                            </td>
                            <td>Não atribuído</td>
                            <td>02/05/2026</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1015</td>
                            <td>Solicitação de instalação de software</td>
                            <td>Software</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Baixa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-success">
                                    Resolvido
                                </span>
                            </td>
                            <td>Carlos Técnico</td>
                            <td>28/04/2026</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white">
            <p class="text-muted small mb-0">
                Esta tela simula a visão do usuário comum. Futuramente exibirá apenas chamados criados pelo usuário autenticado.
            </p>
        </div>
    </div>
@endsection