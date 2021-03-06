<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Muted extends Model
{
    protected $casts = [
        'data' => 'object',
    ];

    protected $table = 'muted';

    public $timestamps = false;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
