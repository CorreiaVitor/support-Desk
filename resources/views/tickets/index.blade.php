@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Chamados</h1>
            <p class="text-muted mb-0">
                Lista visual de chamados cadastrados no SupportDesk.
            </p>
        </div>

        <a href="{{ route('tickets.create') }}" class="btn btn-primary">
            Novo chamado
        </a>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <label for="search" class="form-label">Buscar chamado</label>
                        <input type="text" id="search" class="form-control" placeholder="Ex: computador não liga">
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option selected>Todos</option>
                            <option>Aberto</option>
                            <option>Em andamento</option>
                            <option>Aguardando usuário</option>
                            <option>Resolvido</option>
                            <option>Cancelado</option>
                        </select>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="priority" class="form-label">Prioridade</label>
                        <select id="priority" class="form-select">
                            <option selected>Todas</option>
                            <option>Crítica</option>
                            <option>Alta</option>
                            <option>Média</option>
                            <option>Baixa</option>
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
            <h2 class="h5 mb-0">Todos os chamados</h2>

            <span class="badge text-bg-secondary">
                8 registros
            </span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Número</th>
                            <th>Título</th>
                            <th>Solicitante</th>
                            <th>Categoria</th>
                            <th>Prioridade</th>
                            <th>Status</th>
                            <th>Técnico</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->number }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->requester->name }}</td>
                                <td>{{ $ticket->category->name }}</td>
                                <td>
                                    <span @class([
                                        'badge',
                                        'text-bg-danger' =>
                                            $ticket->priority->name === 'Alta' ||
                                            $ticket->priority->name === 'Crítica',
                                        'text-bg-warning' => $ticket->priority->name === 'Média',
                                        'text-bg-primary' => $ticket->priority->name === 'Baixa',
                                    ])>
                                        {{ $ticket->priority->name }}
                                    </span>
                                </td>
                                <td>
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
                                </td>
                                <td>{{ $ticket->technician->name ?? 'Não atribuído' }}</td>
                                <td class="text-end">
                                    <a href="{{ route('tickets.show') }}" class="btn btn-outline-primary btn-sm">
                                        Ver
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    Nenhum chamado cadastrado até o momento.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
