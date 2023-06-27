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
        'id_user',
        'id_status_state',
        'id_service',
    ];
    public $timestamps = false;
    protected $attributes = ['id_supply' => 1, 'id_user' => 1,'id_status_state'=>1,'id_service'=>1];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function supply()
    {
        return $this->belongsTo(Supply::class,'id_supply','id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class,'id_service','id');
    }
    public function status()
    {
        return $this->belongsTo(Status_state::class,'id_status_state','id');
    }
}

