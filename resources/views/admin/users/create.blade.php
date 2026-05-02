@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Novo usuário</h1>
            <p class="text-muted mb-0">
                Formulário visual para cadastro de usuários no SupportDesk.
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
                                placeholder="Ex: João Silva"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                type="email"
                                id="email"
                                class="form-control"
                                placeholder="Ex: joao.silva@empresa.com"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="profile" class="form-label">Perfil de acesso</label>
                            <select id="profile" class="form-select">
                                <option selected>Selecione um perfil</option>
                                <option>Administrador</option>
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
                                placeholder="Ex: Financeiro, Suporte, Comercial..."
                            >
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha temporária</label>
                            <input
                                type="password"
                                id="password"
                                class="form-control"
                                placeholder="Digite uma senha temporária"
                            >
                        </div>

                        <div class="mb-4">
                            <label for="passwordConfirmation" class="form-label">Confirmar senha</label>
                            <input
                                type="password"
                                id="passwordConfirmation"
                                class="form-control"
                                placeholder="Confirme a senha temporária"
                            >
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
                                Cadastrar usuário
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Perfis disponíveis</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>Administrador:</strong> gerencia usuários, categorias, prioridades e configurações.
                    </p>

                    <p class="mb-2">
                        <strong>Técnico:</strong> atende chamados e adiciona comentários técnicos.
                    </p>

                    <p class="mb-2">
                        <strong>Usuário comum:</strong> abre e acompanha seus próprios chamados.
                    </p>

                    <p class="mb-0">
                        <strong>Supervisor:</strong> acompanha indicadores e desempenho da equipe.
                    </p>
                </div>
            </div>

            <div class="alert alert-warning mb-0">
                Nesta fase, o cadastro é apenas visual. Nenhum usuário será salvo no banco de dados.
            </div>
        </div>
    </div>
@endsection