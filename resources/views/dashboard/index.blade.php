@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Dashboard</h1>
            <p class="text-muted mb-0">
                Visão geral dos chamados do SupportDesk.
            </p>
        </div>

        <a href="#" class="btn btn-primary">
            Novo chamado
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Total de chamados</span>
                    <h2 class="h4 mt-2 mb-0">128</h2>
                    <span class="badge text-bg-secondary mt-3">
                        Todos os registros
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Chamados abertos</span>
                    <h2 class="h4 mt-2 mb-0">34</h2>
                    <span class="badge text-bg-warning mt-3">
                        Aguardando atendimento
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Em andamento</span>
                    <h2 class="h4 mt-2 mb-0">19</h2>
                    <span class="badge text-bg-info mt-3">
                        Com técnicos
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span class="text-muted small">Resolvidos</span>
                    <h2 class="h4 mt-2 mb-0">75</h2>
                    <span class="badge text-bg-success mt-3">
                        Finalizados
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Chamados recentes</h2>
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
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>Computador não liga</td>
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
                                    <td>Carlos Técnico</td>
                                </tr>

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
                                </tr>

                                <tr>
                                    <td>#1003</td>
                                    <td>Solicitação de novo mouse</td>
                                    <td>Equipamentos</td>
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
                                    <td>Marcos Técnico</td>
                                </tr>

                                <tr>
                                    <td>#1004</td>
                                    <td>Impressora travando durante impressão</td>
                                    <td>Impressoras</td>
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
                                    <td>Fernanda Suporte</td>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-white text-end">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        Ver todos os chamados
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Chamados por prioridade</h2>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Crítica</span>
                        <span class="badge text-bg-danger">8</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Alta</span>
                        <span class="badge text-bg-warning">21</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Média</span>
                        <span class="badge text-bg-info">44</span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span>Baixa</span>
                        <span class="badge text-bg-secondary">55</span>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Resumo da equipe</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>4</strong> técnicos ativos
                    </p>

                    <p class="mb-2">
                        <strong>19</strong> chamados em atendimento
                    </p>

                    <p class="mb-0">
                        <strong>5</strong> chamados sem técnico atribuído
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
