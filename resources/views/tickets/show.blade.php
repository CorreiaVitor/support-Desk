@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Chamado #1001</h1>
            <p class="text-muted mb-0">
                Detalhes visuais do chamado aberto no SupportDesk.
            </p>
        </div>

        <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">
            Voltar para chamados
        </a>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Computador não liga</h2>

                    <span class="badge text-bg-warning">
                        Aberto
                    </span>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        O usuário informou que o computador do setor financeiro não liga desde o início
                        do expediente. Ao pressionar o botão de energia, nenhuma luz acende e o equipamento
                        não emite som.
                    </p>

                    <div class="row g-3 mt-3">
                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Solicitante</span>
                                <strong>João Silva</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Técnico responsável</span>
                                <strong>Carlos Técnico</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Categoria</span>
                                <strong>Hardware</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Prioridade</span>
                                <span class="badge text-bg-danger">
                                    Alta
                                </span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Criado em</span>
                                <strong>01/05/2026 às 08:42</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Última atualização</span>
                                <strong>01/05/2026 às 09:15</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Comentários</h2>
                </div>

                <div class="card-body">
                    <div class="border rounded p-3 mb-3">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>João Silva</strong>
                            <span class="text-muted small">01/05/2026 às 08:42</span>
                        </div>

                        <p class="mb-2">
                            O computador não liga desde hoje cedo. Já tentei trocar de tomada,
                            mas o problema continua.
                        </p>

                        <span class="badge text-bg-primary">
                            Comentário público
                        </span>
                    </div>

                    <div class="border rounded p-3 mb-3 bg-light">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Carlos Técnico</strong>
                            <span class="text-muted small">01/05/2026 às 09:05</span>
                        </div>

                        <p class="mb-2">
                            Verificar fonte de alimentação e cabo de energia. Possível problema físico
                            no equipamento.
                        </p>

                        <span class="badge text-bg-dark">
                            Comentário interno
                        </span>
                    </div>

                    <div class="border rounded p-3">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Carlos Técnico</strong>
                            <span class="text-muted small">01/05/2026 às 09:15</span>
                        </div>

                        <p class="mb-2">
                            Chamado recebido. Estou indo até o setor financeiro para verificar o equipamento.
                        </p>

                        <span class="badge text-bg-primary">
                            Comentário público
                        </span>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Adicionar comentário</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="commentType" class="form-label">Tipo de comentário</label>
                            <select id="commentType" class="form-select">
                                <option selected>Comentário público</option>
                                <option>Comentário interno</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Comentário</label>
                            <textarea
                                id="comment"
                                class="form-control"
                                rows="4"
                                placeholder="Digite uma atualização sobre o chamado..."
                            ></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">
                                Adicionar comentário
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Controle do chamado</h2>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option selected>Aberto</option>
                                <option>Em andamento</option>
                                <option>Aguardando usuário</option>
                                <option>Resolvido</option>
                                <option>Cancelado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="technician" class="form-label">Técnico responsável</label>
                            <select id="technician" class="form-select">
                                <option>Não atribuído</option>
                                <option selected>Carlos Técnico</option>
                                <option>Ana Suporte</option>
                                <option>Marcos Técnico</option>
                                <option>Fernanda Suporte</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="priority" class="form-label">Prioridade</label>
                            <select id="priority" class="form-select">
                                <option>Baixa</option>
                                <option>Média</option>
                                <option selected>Alta</option>
                                <option>Crítica</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-primary w-100">
                            Atualizar chamado
                        </button>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h2 class="h5 mb-0">Linha do tempo</h2>
                </div>

                <div class="card-body">
                    <div class="border-start ps-3 mb-3">
                        <strong class="d-block">Chamado criado</strong>
                        <span class="text-muted small">01/05/2026 às 08:42</span>
                    </div>

                    <div class="border-start ps-3 mb-3">
                        <strong class="d-block">Técnico atribuído</strong>
                        <span class="text-muted small">01/05/2026 às 08:58</span>
                    </div>

                    <div class="border-start ps-3 mb-3">
                        <strong class="d-block">Comentário interno adicionado</strong>
                        <span class="text-muted small">01/05/2026 às 09:05</span>
                    </div>

                    <div class="border-start ps-3">
                        <strong class="d-block">Comentário público adicionado</strong>
                        <span class="text-muted small">01/05/2026 às 09:15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection