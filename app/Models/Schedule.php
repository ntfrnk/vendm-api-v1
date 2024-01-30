<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    /**
     * Conecta con las tablas users, stores, y branch_offices
     * 
     * @return Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function schedulable(): MorphTo
    {
        return $this->morphTo();
    }
}
