@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Editar categoria</h1>
            <p class="text-muted mb-0">
                Formulário visual para edição de uma categoria existente.
            </p>
        </div>

        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
            Voltar para categorias
        </a>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Dados da categoria</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome da categoria</label>
                            <input
                                type="text"
                                id="name"
                                class="form-control"
                                value="Hardware"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea id="description" class="form-control" rows="4">Problemas físicos em computadores, monitores, teclados, mouses, cabos, fontes e outros equipamentos.</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="defaultPriority" class="form-label">Prioridade padrão</label>
                            <select id="defaultPriority" class="form-select">
                                <option>Baixa</option>
                                <option selected>Média</option>
                                <option>Alta</option>
                                <option>Crítica</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="responsibleTeam" class="form-label">Equipe responsável sugerida</label>
                            <select id="responsibleTeam" class="form-select">
                                <option selected>Suporte técnico</option>
                                <option>Infraestrutura</option>
                                <option>Sistemas</option>
                                <option>Atendimento interno</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Ativa</option>
                                <option>Inativa</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
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
                    <h2 class="h5 mb-0">Impacto visual da categoria</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-0">
                        Esta categoria aparece em formulários de abertura de chamados, filtros de listagem,
                        telas administrativas e relatórios futuros.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Resumo da categoria</h2>
                </div>

                <div class="card-body">
                    <p class="mb-2">
                        <strong>Nome:</strong> Hardware
                    </p>

                    <p class="mb-2">
                        <strong>Status:</strong>
                        <span class="badge text-bg-success">
                            Ativa
                        </span>
                    </p>

                    <p class="mb-2">
                        <strong>Chamados vinculados:</strong> 24
                    </p>

                    <p class="mb-0">
                        <strong>Prioridade padrão:</strong>
                        <span class="badge text-bg-warning">
                            Média
                        </span>
                    </p>
                </div>
            </div>

            <div class="alert alert-info mb-0">
                Futuramente esta tela será integrada com categorias reais salvas no banco.
            </div>
        </div>
    </div>
@endsection