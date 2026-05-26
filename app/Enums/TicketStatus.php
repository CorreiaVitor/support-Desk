<?php

namespace App\Enums;

enum TicketStatus: int
{
    case Aberto = 1;
    case EmAndamento = 2;
    case AguardandoUsuário = 3;
    case Resolvido = 4;
    case Cancelado = 5;

}
