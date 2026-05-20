@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Chamado #{{ $ticket->number }}</h1>
            <p class="text-muted mb-0">
                Detalhes do chamado cadastrado no SupportDesk.
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
                    <h2 class="h5 mb-0">{{ $ticket->title }}</h2>

                    <span @class([
                        'badge',
                        'text-bg-warning' => $ticket->ticketStatus->name === 'Aberto',
                        'text-bg-info' => $ticket->ticketStatus->name === 'Em andamento',
                        'text-bg-secondary' => $ticket->ticketStatus->name === 'Aguardando usuário',
                        'text-bg-success' => $ticket->ticketStatus->name === 'Resolvido',
                        'text-bg-dark' => $ticket->ticketStatus->name === 'Cancelado',
                    ])>
                        {{ $ticket->ticketStatus->name }}
                    </span>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        {{ $ticket->description }}
                    </p>

                    <div class="row g-3 mt-3">
                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Solicitante</span>
                                <strong>{{ $ticket->requester->name }}</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Técnico responsável</span>
                                <strong>{{ $ticket->technician?->name ?? 'Não atribuído' }}</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Categoria</span>
                                <strong>{{ $ticket->category->name }}</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Prioridade</span>

                                <span @class([
                                    'badge',
                                    'text-bg-danger' =>
                                        $ticket->priority->name === 'Alta' ||
                                        $ticket->priority->name === 'Crítica',
                                    'text-bg-warning' => $ticket->priority->name === 'Média',
                                    'text-bg-secondary' => $ticket->priority->name === 'Baixa',
                                ])>
                                    {{ $ticket->priority->name }}
                                </span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Criado em</span>
                                <strong>{{ $ticket->created_at->format('d/m/Y H:i') }}</strong>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="border rounded p-3 bg-light">
                                <span class="text-muted small d-block">Última atualização</span>
                                <strong>{{ $ticket->updated_at->format('d/m/Y H:i') }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Comentários</h2>

                    <span class="badge text-bg-secondary">
                        {{ $ticket->comments->count() }} registros
                    </span>
                </div>

                <div class="card-body">
                    @forelse ($ticket->comments as $comment)
                        <div class='border rounded p-3 mb-3 bg-light'>
                            <div class="d-flex flex-column flex-md-row justify-content-between gap-2 mb-2">
                                <strong>{{ $comment->user->name }}</strong>
                                <span class="text-muted small">
                                    {{ $comment->created_at->format('d/m/Y H:i') }}
                                </span>
                            </div>

                            <p class="mb-2">
                                {{ $comment->body }}
                            </p>

                            @if ($comment->is_internal)
                                <span class="badge text-bg-dark">
                                    Comentário interno
                                </span>
                            @else
                                <span class="badge text-bg-primary">
                                    Comentário público
                                </span>
                            @endif
                        </div>
                    @empty
                        <p class="text-muted mb-0">
                            Nenhum comentário registrado para este chamado.
                        </p>
                    @endforelse
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
                            <textarea id="comment" class="form-control" rows="4" placeholder="Digite uma atualização sobre o chamado..."></textarea>
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
                                <option selected>{{ $ticket->ticketStatus->name }}</option>
                                <option>Aberto</option>
                                <option>Em andamento</option>
                                <option>Aguardando usuário</option>
                                <option>Resolvido</option>
                                <option>Cancelado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="technician" class="form-label">Técnico responsável</label>
                            <select id="technician" class="form-select">
                                <option selected>{{ $ticket->technician?->name ?? 'Não atribuído' }}</option>
                                <option>Carlos Técnico</option>
                                <option>Ana Suporte</option>
                                <option>Marcos Técnico</option>
                                <option>Fernanda Suporte</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="priority" class="form-label">Prioridade</label>
                            <select id="priority" class="form-select">
                                <option selected>{{ $ticket->priority->name }}</option>
                                <option>Baixa</option>
                                <option>Média</option>
                                <option>Alta</option>
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
                    <h2 class="h5 mb-0">Resumo do chamado</h2>
                </div>

                <div class="card-body">

                    <p class="mb-2">
                        <strong>Número:</strong> #{{ $ticket->number }}
                    </p>

                    <p class="mb-2">
                        <strong>Status:</strong> {{ $ticket->ticketStatus->name }}
                    </p>

                    <p class="mb-2">
                        <strong>Prioridade:</strong> {{ $ticket->priority->name }}
                    </p>

                    <p class="mb-2">
                        <strong>Categoria:</strong> {{ $ticket->category->name }}
                    </p>

                    <p class="mb-0">
                        <strong>Comentários:</strong> {{ $ticket->comments->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
