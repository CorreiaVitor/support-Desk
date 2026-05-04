@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Painel do supervisor</h1>
            <p class="text-muted mb-0">
                Visão visual para acompanhamento da equipe de suporte.
            </p>
        </div>

        <a href="{{ route('tickets.index') }}" class="btn btn-outline-primary">
            Ver todos os chamados
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Chamados abertos</span>
                    <h2 class="h4 mt-2 mb-0">34</h2>
                    <span class="badge text-bg-warning mt-3">
                        Aguardando suporte
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Chamados críticos</span>
                    <h2 class="h4 mt-2 mb-0">8</h2>
                    <span class="badge text-bg-danger mt-3">
                        Atenção imediata
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Sem técnico</span>
                    <h2 class="h4 mt-2 mb-0">5</h2>
                    <span class="badge text-bg-secondary mt-3">
                        Não atribuídos
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Resolvidos hoje</span>
                    <h2 class="h4 mt-2 mb-0">12</h2>
                    <span class="badge text-bg-success mt-3">
                        Finalizados
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Chamados críticos e atrasados</h2>

                    <span class="badge text-bg-danger">
                        4 em atenção
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
                                    <th>Tempo aberto</th>
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
                                    <td>6 horas</td>
                                    <td class="text-end">
                                        <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                            Ver
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#1008</td>
                                    <td>Rede lenta no setor financeiro</td>
                                    <td>Rede</td>
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
                                    <td>5 horas</td>
                                    <td class="text-end">
                                        <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                            Ver
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#1011</td>
                                    <td>Servidor de arquivos indisponível</td>
                                    <td>Rede</td>
                                    <td>
                                        <span class="badge text-bg-danger">
                                            Crítica
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge text-bg-warning">
                                            Aberto
                                        </span>
                                    </td>
                                    <td>Não atribuído</td>
                                    <td>2 horas</td>
                                    <td class="text-end">
                                        <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                            Ver
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#1013</td>
                                    <td>Sistema de vendas fora do ar</td>
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
                                    <td>Carlos Técnico</td>
                                    <td>1 hora</td>
                                    <td class="text-end">
                                        <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
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
                        Dados fictícios para simular acompanhamento de chamados prioritários.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Desempenho da equipe</h2>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span>Carlos Técnico</span>
                        <span class="badge text-bg-primary">8 chamados</span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Ana Suporte</span>
                        <span class="badge text-bg-primary">7 chamados</span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Marcos Técnico</span>
                        <span class="badge text-bg-primary">5 chamados</span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span>Fernanda Suporte</span>
                        <span class="badge text-bg-primary">4 chamados</span>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Resumo operacional</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>Tempo médio de atendimento:</strong> 3h 25min
                    </p>

                    <p class="mb-2">
                        <strong>Categoria mais acionada:</strong> Acessos
                    </p>

                    <p class="mb-2">
                        <strong>Chamados aguardando usuário:</strong> 6
                    </p>

                    <p class="mb-0">
                        <strong>Satisfação fictícia:</strong> 92%
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection