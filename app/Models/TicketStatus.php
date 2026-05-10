<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'description', 'sort_order', 'is_final', 'is_active'])]
class TicketStatus extends Model
{

    public function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_final' => 'boolean',
            'is_active' => 'boolean'
        ];
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
