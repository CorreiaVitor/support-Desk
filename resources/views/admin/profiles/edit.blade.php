@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Editar perfil de acesso</h1>
            <p class="text-muted mb-0">
                Formulário visual para edição de um perfil existente.
            </p>
        </div>

        <a href="{{ route('admin.profiles.index') }}" class="btn btn-outline-secondary">
            Voltar para perfis
        </a>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Dados do perfil</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome do perfil</label>
                            <input
                                type="text"
                                id="name"
                                class="form-control"
                                value="Administrador"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea id="description" class="form-control" rows="4">Gerencia usuários, perfis, categorias, prioridades, status e configurações gerais do sistema.</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Permissões visuais</label>

                            <div class="border rounded p-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="manageUsers" checked>
                                    <label class="form-check-label" for="manageUsers">
                                        Gerenciar usuários
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="manageTickets" checked>
                                    <label class="form-check-label" for="manageTickets">
                                        Gerenciar todos os chamados
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="assignedTickets" checked>
                                    <label class="form-check-label" for="assignedTickets">
                                        Atender chamados atribuídos
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="openTickets" checked>
                                    <label class="form-check-label" for="openTickets">
                                        Abrir chamados
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="internalComments" checked>
                                    <label class="form-check-label" for="internalComments">
                                        Adicionar comentários internos
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="viewReports" checked>
                                    <label class="form-check-label" for="viewReports">
                                        Visualizar relatórios e indicadores
                                    </label>
                                </div>
                            </div>

                            <div class="form-text">
                                Estes campos ainda não controlam permissões reais.
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.profiles.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
                                Salvar alterações
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Resumo do perfil</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>Nome:</strong> Administrador
                    </p>

                    <p class="mb-2">
                        <strong>Status:</strong>
                        <span class="badge text-bg-success">
                            Ativo
                        </span>
                    </p>

                    <p class="mb-2">
                        <strong>Usuários vinculados:</strong> 1
                    </p>

                    <p class="mb-0">
                        <strong>Tipo:</strong> Perfil administrativo
                    </p>
                </div>
            </div>

            <div class="alert alert-info mb-0">
                Futuramente esta tela será integrada com regras reais de autorização.
            </div>
        </div>
    </div>
@endsection