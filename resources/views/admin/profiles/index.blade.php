@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Perfis de acesso</h1>
            <p class="text-muted mb-0">
                Gerenciamento visual dos perfis disponíveis no SupportDesk.
            </p>
        </div>

        <a href="{{ route('admin.profiles.create') }}" class="btn btn-primary">
            Novo perfil
        </a>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-md-5">
                        <label for="search" class="form-label">Buscar perfil</label>
                        <input
                            type="text"
                            id="search"
                            class="form-control"
                            placeholder="Ex: administrador, técnico, supervisor..."
                        >
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Ativo</option>
                            <option>Inativo</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-3 d-flex align-items-end">
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
            <h2 class="h5 mb-0">Lista de perfis</h2>

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
                            <th>Usuários vinculados</th>
                            <th>Status</th>
                            <th>Permissões principais</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <span class="badge text-bg-primary">
                                    Administrador
                                </span>
                            </td>
                            <td>Gerencia usuários, perfis e configurações do sistema.</td>
                            <td>1</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>Usuários, chamados, categorias e relatórios</td>
                            <td class="text-end">
                                <a href="{{ route('admin.profiles.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="badge text-bg-info">
                                    Técnico
                                </span>
                            </td>
                            <td>Atende chamados, altera status e adiciona comentários técnicos.</td>
                            <td>3</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>Chamados atribuídos e comentários internos</td>
                            <td class="text-end">
                                <a href="{{ route('admin.profiles.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Usuário comum
                                </span>
                            </td>
                            <td>Abre chamados e acompanha suas próprias solicitações.</td>
                            <td>18</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>Abrir chamado e visualizar próprios chamados</td>
                            <td class="text-end">
                                <a href="{{ route('admin.profiles.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="badge text-bg-warning">
                                    Supervisor
                                </span>
                            </td>
                            <td>Acompanha indicadores, técnicos e chamados críticos.</td>
                            <td>2</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativo
                                </span>
                            </td>
                            <td>Dashboard gerencial e acompanhamento da equipe</td>
                            <td class="text-end">
                                <a href="{{ route('admin.profiles.edit') }}" class="btn btn-outline-primary btn-sm">
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
                Nesta fase, os perfis são apenas visuais. As permissões reais serão criadas futuramente no back-end.
            </p>
        </div>
    </div>
@endsection