<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
