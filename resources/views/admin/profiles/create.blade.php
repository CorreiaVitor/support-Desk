@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Novo perfil de acesso</h1>
            <p class="text-muted mb-0">
                Formulário visual para criação de perfis no SupportDesk.
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
                                placeholder="Ex: Coordenador de suporte"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea
                                id="description"
                                class="form-control"
                                rows="4"
                                placeholder="Descreva a função deste perfil dentro do sistema..."
                            ></textarea>
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
                                    <input class="form-check-input" type="checkbox" id="manageUsers">
                                    <label class="form-check-label" for="manageUsers">
                                        Gerenciar usuários
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="manageTickets">
                                    <label class="form-check-label" for="manageTickets">
                                        Gerenciar todos os chamados
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="assignedTickets">
                                    <label class="form-check-label" for="assignedTickets">
                                        Atender chamados atribuídos
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="openTickets">
                                    <label class="form-check-label" for="openTickets">
                                        Abrir chamados
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="internalComments">
                                    <label class="form-check-label" for="internalComments">
                                        Adicionar comentários internos
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="viewReports">
                                    <label class="form-check-label" for="viewReports">
                                        Visualizar relatórios e indicadores
                                    </label>
                                </div>
                            </div>

                            <div class="form-text">
                                As permissões reais serão implementadas futuramente no back-end.
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.profiles.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
                                Cadastrar perfil
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Como pensar em perfis?</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Um perfil representa um conjunto de ações que um usuário pode executar no sistema.
                    </p>

                    <ul class="mb-0">
                        <li>Administrador configura o sistema.</li>
                        <li>Técnico atende chamados.</li>
                        <li>Usuário comum abre solicitações.</li>
                        <li>Supervisor acompanha resultados.</li>
                    </ul>
                </div>
            </div>

            <div class="alert alert-warning mb-0">
                Nesta fase, os checkboxes são apenas visuais e não aplicam regras reais.
            </div>
        </div>
    </div>
@endsection