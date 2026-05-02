@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Novo chamado</h1>
            <p class="text-muted mb-0">
                Formulário visual para abertura de chamados no SupportDesk.
            </p>
        </div>

        <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">
            Voltar para chamados
        </a>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Informações do chamado</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label">Título do chamado</label>
                            <input type="text" id="title" class="form-control" placeholder="Ex: Computador não liga">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select id="category" class="form-select">
                                <option selected>Selecione uma categoria</option>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Rede</option>
                                <option>Acessos</option>
                                <option>Impressoras</option>
                                <option>Sistemas internos</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="priority" class="form-label">Prioridade</label>
                            <select id="priority" class="form-select">
                                <option selected>Selecione uma prioridade</option>
                                <option>Baixa</option>
                                <option>Média</option>
                                <option>Alta</option>
                                <option>Crítica</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição do problema</label>
                            <textarea id="description" class="form-control" rows="6"
                                placeholder="Descreva com detalhes o problema encontrado..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="attachment" class="form-label">Anexo</label>
                            <input type="file" id="attachment" class="form-control">
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
                                Abrir chamado
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Orientações</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Antes de abrir um chamado, descreva o problema com clareza.
                    </p>

                    <ul class="mb-0">
                        <li>Informe o que aconteceu.</li>
                        <li>Diga quando o problema começou.</li>
                        <li>Inclua mensagens de erro, se houver.</li>
                        <li>Escolha a categoria correta.</li>
                    </ul>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Exemplo de descrição</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-0">
                        "Meu computador não liga desde hoje pela manhã. Ao apertar o botão de energia,
                        nenhuma luz acende e o monitor permanece desligado."
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
