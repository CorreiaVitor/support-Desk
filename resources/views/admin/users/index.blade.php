@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Usuários</h1>
            <p class="text-muted mb-0">
                Gerenciamento visual dos usuários cadastrados no SupportDesk.
            </p>
        </div>

        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
            Novo usuário
        </a>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <label for="search" class="form-label">Buscar usuário</label>
                        <input
                            type="text"
                            id="search"
                            class="form-control"
                            placeholder="Ex: João, técnico, suporte..."
                        >
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="profile" class="form-label">Perfil</label>
                        <select id="profile" class="form-select">
                            <option selected>Todos</option>
                            <option>Administrador</option>
                            <option>Técnico</option>
                            <option>Usuário comum</option>
                            <option>Supervisor</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Ativo</option>
                            <option>Inativo</option>
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
            <h2 class="h5 mb-0">Lista de usuários</h2>

            <span class="badge text-bg-secondary">
                6 registros
            </span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil</th>
                            <th>Departamento</th>
                            <th>Status</th>
                            <th>Último acesso</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>João Administrador</td>
                            <td>joao.admin@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-primary">
                                    Administrador
                                </span>
                            </td>
                            <td>TI</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>02/05/2026 às 09:20</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Carlos Técnico</td>
                            <td>carlos.tecnico@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-info">
                                    Técnico
                                </span>
                            </td>
                            <td>Suporte</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>02/05/2026 às 08:45</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Ana Suporte</td>
                            <td>ana.suporte@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-info">
                                    Técnico
                                </span>
                            </td>
                            <td>Suporte</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>01/05/2026 às 17:10</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Fernanda Supervisora</td>
                            <td>fernanda.supervisora@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Supervisor
                                </span>
                            </td>
                            <td>Gestão de Suporte</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>01/05/2026 às 15:32</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Maria Oliveira</td>
                            <td>maria.oliveira@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Usuário comum
                                </span>
                            </td>
                            <td>Financeiro</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>30/04/2026 às 14:05</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Pedro Santos</td>
                            <td>pedro.santos@supportdesk.test</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Usuário comum
                                </span>
                            </td>
                            <td>Comercial</td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Inativo
                                </span>
                            </td>
                            <td>25/04/2026 às 11:18</td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white">
            <p class="text-muted small mb-0">
                Dados fictícios exibidos apenas para construção visual da área administrativa.
            </p>
        </div>
    </div>
@endsection