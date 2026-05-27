<?php

namespace App\Enums;

enum TicketStatus: string
{
    case Open = 'Aberto';
    case InProgress  = 'Em andamento';
    case WaitingUser  = 'Aguardando usuário';
    case Resolved = 'Resolvido';
    case Canceled  = 'Cancelado';

}
