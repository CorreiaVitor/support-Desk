@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Prioridades</h1>
            <p class="text-muted mb-0">
                Configuração visual das prioridades usadas nos chamados.
            </p>
        </div>

        <button type="button" class="btn btn-primary">
            Nova prioridade
        </button>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Lista de prioridades</h2>

                    <span class="badge text-bg-secondary">
                        4 registros
                    </span>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Tempo esperado</th>
                                    <th>Uso recomendado</th>
                                    <th>Status</th>
                                    <th class="text-end">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <span class="badge text-bg-danger">
                                            Crítica
                                        </span>
                                    </td>
                                    <td>Problemas urgentes que impedem o funcionamento de áreas importantes.</td>
                                    <td>Até 1 hora</td>
                                    <td>Sistema parado, rede indisponível, falha grave.</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativa
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="badge text-bg-warning">
                                            Alta
                                        </span>
                                    </td>
                                    <td>Problemas importantes que afetam diretamente o trabalho do usuário.</td>
                                    <td>Até 4 horas</td>
                                    <td>Computador sem funcionar, usuário sem acesso, erro recorrente.</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativa
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="badge text-bg-info">
                                            Média
                                        </span>
                                    </td>
                                    <td>Problemas que causam dificuldade, mas não impedem totalmente o trabalho.</td>
                                    <td>Até 1 dia útil</td>
                                    <td>Lentidão, erro pontual, solicitação de ajuste.</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativa
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="badge text-bg-secondary">
                                            Baixa
                                        </span>
                                    </td>
                                    <td>Solicitações simples, melhorias ou demandas sem urgência.</td>
                                    <td>Até 3 dias úteis</td>
                                    <td>Pedido de equipamento, dúvida simples, melhoria futura.</td>
                                    <td>
                                        <span class="badge text-bg-success">
                                            Ativa
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
                        Nesta fase, as prioridades são apenas visuais e não possuem regra real de prazo.
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
                            <label for="name" class="form-label">Nome da prioridade</label>
                            <input type="text" id="name" class="form-control" placeholder="Ex: Urgente">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea id="description" class="form-control" rows="3"
                                placeholder="Descreva quando esta prioridade deve ser usada..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="expectedTime" class="form-label">Tempo esperado</label>
                            <input type="text" id="expectedTime" class="form-control" placeholder="Ex: Até 2 horas">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativa</option>
                                <option>Inativa</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-primary w-100">
                            Salvar prioridade
                        </button>
                    </form>
                </div>
            </div>

            <div class="alert alert-warning mb-0">
                Futuramente as prioridades poderão influenciar prazos, alertas e relatórios.
            </div>
        </div>
    </div>
@endsection
