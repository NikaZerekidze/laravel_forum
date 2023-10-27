<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Replay;
class Thread extends Model
{
    use HasFactory;

    public function replies(): HasMany
    {
        return $this->hasMany(Replay::class);
    }
}
