@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Status dos chamados</h1>
            <p class="text-muted mb-0">
                Configuração visual dos status usados no fluxo de atendimento.
            </p>
        </div>

        <button type="button" class="btn btn-primary">
            Novo status
        </button>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Fluxo de status</h2>

                    <span class="badge text-bg-secondary">
                        5 registros
                    </span>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Ordem</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Visibilidade</th>
                                    <th>Finaliza chamado?</th>
                                    <th>Status</th>
                                    <th class="text-end">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <span class="badge text-bg-warning">
                                            Aberto
                                        </span>
                                    </td>
                                    <td>Chamado criado e aguardando análise inicial.</td>
                                    <td>Público</td>
                                    <td>Não</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <span class="badge text-bg-info">
                                            Em andamento
                                        </span>
                                    </td>
                                    <td>Chamado atribuído e em atendimento por um técnico.</td>
                                    <td>Público</td>
                                    <td>Não</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                        <span class="badge text-bg-secondary">
                                            Aguardando usuário
                                        </span>
                                    </td>
                                    <td>Atendimento pausado aguardando retorno ou informação do solicitante.</td>
                                    <td>Público</td>
                                    <td>Não</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Resolvido
                                        </span>
                                    </td>
                                    <td>Chamado solucionado pela equipe de suporte.</td>
                                    <td>Público</td>
                                    <td>Sim</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>
                                        <span class="badge text-bg-dark">
                                            Cancelado
                                        </span>
                                    </td>
                                    <td>Chamado cancelado por duplicidade, erro de abertura ou solicitação inválida.</td>
                                    <td>Interno</td>
                                    <td>Sim</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-white">
                    <p class="text-muted small mb-0">
                        Nesta fase, os status representam apenas o fluxo visual do atendimento.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Cadastro visual</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome do status</label>
                            <input type="text" id="name" class="form-control" placeholder="Ex: Em análise">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea id="description" class="form-control" rows="3" placeholder="Descreva o significado deste status..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="visibility" class="form-label">Visibilidade</label>
                            <select id="visibility" class="form-select">
                                <option selected>Público</option>
                                <option>Interno</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="finishTicket" class="form-label">Finaliza chamado?</label>
                            <select id="finishTicket" class="form-select">
                                <option selected>Não</option>
                                <option>Sim</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-primary w-100">
                            Salvar status
                        </button>
                    </form>
                </div>
            </div>

            <div class="alert alert-info mb-0">
                Futuramente os status serão usados para controlar o ciclo de vida real dos chamados.
            </div>
        </div>
    </div>
@endsection
