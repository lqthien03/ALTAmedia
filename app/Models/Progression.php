<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Progression extends Model
{
    use HasFactory;
    public $table ="progressions";

    protected $fillable=[
        'stt',
        'time_cap',
        'time_sudung',
        'id_supply',
    ];
    public $timestamps = true;

    public function progression()
    {
        # code...
        return $this->belongsTo(User::class,'id');

    }
}

