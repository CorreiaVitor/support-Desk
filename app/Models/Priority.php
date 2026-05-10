<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


#[Fillable(['name', 'description', 'level', 'is_active'])]
class Priority extends Model
{

    protected function casts()
    {
        return [
            'level' => 'integer',
            'is_active' => 'boolean'
        ];
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Priority::class);
    }
}
