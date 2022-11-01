<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player_enter extends Model
{
    use HasFactory;
    protected $table = "player_enters";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
}
