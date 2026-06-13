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
                        <div @class([
                            'border rounded p-3 mb-3',
                            'bg-light' => $comment->is_internal,
                        ])>
                            <div class="d-flex flex-column flex-md-row justify-content-between gap-2 mb-2">

                                @include('tickets.comments._edit-modal', [
                                    'ticket' => $ticket,
                                    'tiketComment' => $comment,
                                ])

                                <div>
                                    <strong>{{ $comment->user->name }}</strong>

                                    <span class="text-muted small d-block">
                                        {{ $comment->created_at->format('d/m/Y H:i') }}
                                    </span>
                                </div>

                                <div class="d-flex align-items-start gap-2">
                                    @if ($comment->is_internal)
                                        <span class="badge text-bg-dark align-self-start">
                                            Comentário interno
                                        </span>
                                    @else
                                        <span class="badge text-bg-primary align-self-start">
                                            Comentário público
                                        </span>
                                    @endif

                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border-0 fw-bold px-2 py-0" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="Abrir ações do comentário">
                                            ...
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <li>
                                                <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editCommentModal-{{ $comment->id }}">
                                                    Editar comentário
                                                </button>
                                            </li>

                                            <li>
                                                <form method="post"
                                                    action="{{ route('ticket.comments.destroy', [$ticket->number, $comment->id]) }}">
                                                    @csrf
                                                    @method('DELETE');
                                                    <button class="dropdown-item text-danger" type="submit"
                                                        onclick="return confirm('Tem certza que você quer excluir esse comentário?')">
                                                        Excluir comentário
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-3">
                                {{ $comment->body }}
                            </p>
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
                    <form action="{{ route('ticket.comment', $ticket->number) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="commentType" class="form-label">Tipo de comentário</label>
                            <select id="commentType" name="commentType" class="form-select">
                                <option value="0" selected>Comentário público</option>
                                <option value="1">Comentário interno</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Comentário</label>
                            <textarea id="comment" name="comment" class="form-control" rows="4"
                                placeholder="Digite uma atualização sobre o chamado..."></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
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
                            <label for="ticket_status_id" class="form-label">Status</label>
                            <select id="ticket_status_id" name="ticket_status_id" class="form-select">
                                @foreach ($ticketStatuses as $ticketStatus)
                                    <option value="{{ $ticketStatus->id }}" @selected($ticket->ticket_status_id === $ticketStatus->id)>
                                        {{ $ticketStatus->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="technician_id" class="form-label">Técnico responsável</label>
                            <select id="technician_id" name="technician_id" class="form-select">
                                <option value="" @selected(is_null($ticket->technician_id))>
                                    Não atribuído
                                </option>

                                @foreach ($technicians as $technician)
                                    <option value="{{ $technician->id }}" @selected($ticket->technician_id === $technician->id)>
                                        {{ $technician->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="priority_id" class="form-label">Prioridade</label>
                            <select id="priority_id" name="priority_id" class="form-select">
                                @foreach ($priorities as $priority)
                                    <option value="{{ $priority->id }}"@selected($ticket->priority_id === $priority->id)>
                                        {{ $priority->name }}
                                    </option>
                                @endforeach
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
