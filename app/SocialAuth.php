<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialAuth extends Model
{
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
