@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Editar usuário</h1>
            <p class="text-muted mb-0">
                Formulário visual para edição dos dados de um usuário.
            </p>
        </div>

        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
            Voltar para usuários
        </a>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Dados do usuário</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome completo</label>
                            <input
                                type="text"
                                id="name"
                                class="form-control"
                                value="João Administrador"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                type="email"
                                id="email"
                                class="form-control"
                                value="joao.admin@supportdesk.test"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="profile" class="form-label">Perfil de acesso</label>
                            <select id="profile" class="form-select">
                                <option selected>Administrador</option>
                                <option>Técnico</option>
                                <option>Usuário comum</option>
                                <option>Supervisor</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="department" class="form-label">Departamento</label>
                            <input
                                type="text"
                                id="department"
                                class="form-control"
                                value="TI"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
                                Salvar alterações
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Alteração de senha</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Nova senha</label>
                            <input
                                type="password"
                                id="newPassword"
                                class="form-control"
                                placeholder="Digite uma nova senha"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="newPasswordConfirmation" class="form-label">Confirmar nova senha</label>
                            <input
                                type="password"
                                id="newPasswordConfirmation"
                                class="form-control"
                                placeholder="Confirme a nova senha"
                            >
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-primary">
                                Atualizar senha
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Resumo do usuário</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>Nome:</strong> João Administrador
                    </p>

                    <p class="mb-2">
                        <strong>Perfil:</strong> Administrador
                    </p>

                    <p class="mb-2">
                        <strong>Status:</strong>
                        <span class="badge text-bg-success">
                            Ativo
                        </span>
                    </p>

                    <p class="mb-0">
                        <strong>Último acesso:</strong> 02/05/2026 às 09:20
                    </p>
                </div>
            </div>

            <div class="alert alert-info mb-0">
                Futuramente esta tela será usada para alterar dados reais do usuário no banco.
            </div>
        </div>
    </div>
@endsection