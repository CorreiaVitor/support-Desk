@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Categorias</h1>
            <p class="text-muted mb-0">
                Gerenciamento visual das categorias usadas para classificar chamados.
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            Nova categoria
        </a>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-md-5">
                        <label for="search" class="form-label">Buscar categoria</label>
                        <input
                            type="text"
                            id="search"
                            class="form-control"
                            placeholder="Ex: hardware, rede, acessos..."
                        >
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Ativa</option>
                            <option>Inativa</option>
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
            <h2 class="h5 mb-0">Lista de categorias</h2>

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
                            <th>Descrição</th>
                            <th>Chamados vinculados</th>
                            <th>Status</th>
                            <th>Prioridade padrão</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Hardware</td>
                            <td>Problemas físicos em computadores, monitores, teclados e periféricos.</td>
                            <td>24</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Média
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Software</td>
                            <td>Instalação, atualização ou erro em programas utilizados pela empresa.</td>
                            <td>18</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-info">
                                    Média
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Rede</td>
                            <td>Problemas com internet, conexão interna, Wi-Fi ou lentidão de rede.</td>
                            <td>12</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Alta
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Acessos</td>
                            <td>Solicitações de criação, alteração ou recuperação de acesso.</td>
                            <td>31</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-warning">
                                    Média
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Impressoras</td>
                            <td>Chamados relacionados a impressoras, filas de impressão e suprimentos.</td>
                            <td>9</td>
                            <td>
                                <span class="badge text-bg-success">
                                    Ativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    Baixa
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Sistemas internos</td>
                            <td>Erros ou dúvidas relacionadas aos sistemas internos da empresa.</td>
                            <td>15</td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Inativa
                                </span>
                            </td>
                            <td>
                                <span class="badge text-bg-danger">
                                    Alta
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit') }}" class="btn btn-outline-primary btn-sm">
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
                Nesta fase, as categorias são apenas visuais. Nenhuma informação está sendo salva no banco de dados.
            </p>
        </div>
    </div>
@endsection