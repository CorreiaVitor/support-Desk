@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Nova categoria</h1>
            <p class="text-muted mb-0">
                Formulário visual para criação de categorias de chamados.
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
                                placeholder="Ex: Rede, Hardware, Acessos..."
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea
                                id="description"
                                class="form-control"
                                rows="4"
                                placeholder="Descreva quando esta categoria deve ser usada..."
                            ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="defaultPriority" class="form-label">Prioridade padrão</label>
                            <select id="defaultPriority" class="form-select">
                                <option selected>Selecione uma prioridade padrão</option>
                                <option>Baixa</option>
                                <option>Média</option>
                                <option>Alta</option>
                                <option>Crítica</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="responsibleTeam" class="form-label">Equipe responsável sugerida</label>
                            <select id="responsibleTeam" class="form-select">
                                <option selected>Selecione uma equipe</option>
                                <option>Suporte técnico</option>
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
                                Cadastrar categoria
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Por que usar categorias?</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        As categorias ajudam a organizar os chamados e facilitam o direcionamento para a equipe correta.
                    </p>

                    <ul class="mb-0">
                        <li>Hardware para problemas físicos.</li>
                        <li>Rede para conexão e internet.</li>
                        <li>Acessos para contas e permissões.</li>
                        <li>Sistemas para erros em aplicações internas.</li>
                    </ul>
                </div>
            </div>

            <div class="alert alert-warning mb-0">
                Nesta fase, o formulário é apenas visual e não grava dados.
            </div>
        </div>
    </div>
@endsection