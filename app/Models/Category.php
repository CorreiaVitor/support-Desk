<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_active'
    ];
     
    protected function casts()
    {
        return [
            'is_active' => 'boolean'
        ];
    }

    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
