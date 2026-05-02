@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Chamados</h1>
            <p class="text-muted mb-0">
                Lista visual de chamados cadastrados no SupportDesk.
            </p>
        </div>

        <a href="{{ route('tickets.create') }}" class="btn btn-primary">
            Novo chamado
        </a>
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
                            placeholder="Ex: computador não liga"
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
                            <option>Cancelado</option>
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
            <h2 class="h5 mb-0">Todos os chamados</h2>

            <span class="badge text-bg-secondary">
                8 registros
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
                            <th>Técnico</th>
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
                            <td>Carlos Técnico</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1002</td>
                            <td>Erro ao acessar o sistema financeiro</td>
                            <td>Maria Oliveira</td>
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
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1003</td>
                            <td>Solicitação de novo mouse</td>
                            <td>Pedro Santos</td>
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
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1004</td>
                            <td>Impressora travando durante impressão</td>
                            <td>Ana Costa</td>
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
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1005</td>
                            <td>Usuário sem acesso ao e-mail</td>
                            <td>Lucas Almeida</td>
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
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
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
                            <td>Carlos Técnico</td>
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1007</td>
                            <td>Solicitação de criação de usuário</td>
                            <td>Rafael Mendes</td>
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
                            <td class="text-end">
                                <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>#1008</td>
                            <td>Rede lenta no setor financeiro</td>
                            <td>Camila Rocha</td>
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
                Dados fictícios exibidos apenas para construção visual da tela.
            </p>
        </div>
    </div>
@endsection