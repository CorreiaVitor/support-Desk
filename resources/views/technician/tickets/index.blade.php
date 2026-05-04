@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Chamados atribuídos</h1>
            <p class="text-muted mb-0">
                Visão visual dos chamados atribuídos ao técnico logado.
            </p>
        </div>

        <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">
            Ver todos os chamados
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Meus chamados abertos</span>
                    <h2 class="h4 mt-2 mb-0">6</h2>
                    <span class="badge text-bg-warning mt-3">
                        Aguardando ação
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Em andamento</span>
                    <h2 class="h4 mt-2 mb-0">4</h2>
                    <span class="badge text-bg-info mt-3">
                        Em atendimento
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Resolvidos hoje</span>
                    <h2 class="h4 mt-2 mb-0">3</h2>
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
                    <div class="col-12 col-md-4">
                        <label for="search" class="form-label">Buscar chamado</label>
                        <input
                            type="text"
                            id="search"
                            class="form-control"
                            placeholder="Ex: computador, rede, acesso..."
                        >
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Aberto</option>
                            <option>Em andamento</option>
                            <option>Aguardando usuário</option>
                            <option>Resolvido</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="priority" class="form-label">Prioridade</label>
                        <select id="priority" class="form-select">
                            <option selected>Todas</option>
                            <option>Crítica</option>
                            <option>Alta</option>
                            <option>Média</option>
                            <option>Baixa</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-2 d-flex align-items-end">
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
            <h2 class="h5 mb-0">Fila do técnico</h2>

            <span class="badge text-bg-secondary">
                6 chamados
            </span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Número</th>
                            <th>Título</th>
                            <th>Solicitante</th>
                            <th>Categoria</th>
                            <th>Prioridade</th>
                            <th>Status</th>
                            <th>Última atualização</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>Computador não liga</td>
                            <td>João Silva</td>
                            <td>Hardware</td>
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
                            <td>01/05/2026 às 09:15</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1006</td>
                            <td>Atualização de software solicitada</td>
                            <td>Beatriz Lima</td>
                            <td>Software</td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Média
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Aguardando usuário
                                </span>
                            </td>
                            <td>01/05/2026 às 14:22</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1010</td>
                            <td>Monitor com tela piscando</td>
                            <td>Rafael Mendes</td>
                            <td>Hardware</td>
                            <td>
                                <span class="badge text-bg-info">
                                    Média
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-info">
                                    Em andamento
                                </span>
                            </td>
                            <td>02/05/2026 às 10:08</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1014</td>
                            <td>Teclado parou de funcionar</td>
                            <td>Mariana Alves</td>
                            <td>Equipamentos</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Baixa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Aberto
                                </span>
                            </td>
                            <td>02/05/2026 às 11:40</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1016</td>
                            <td>Notebook aquecendo muito</td>
                            <td>Paulo Henrique</td>
                            <td>Hardware</td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Média
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-info">
                                    Em andamento
                                </span>
                            </td>
                            <td>02/05/2026 às 13:12</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1018</td>
                            <td>Solicitação de troca de cabo HDMI</td>
                            <td>Camila Rocha</td>
                            <td>Equipamentos</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Baixa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Aberto
                                </span>
                            </td>
                            <td>02/05/2026 às 15:05</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Atender
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white">
            <p class="text-muted small mb-0">
                Esta tela simula a visão de um técnico. Futuramente exibirá apenas chamados atribuídos ao usuário autenticado.
            </p>
        </div>
    </div>
@endsection