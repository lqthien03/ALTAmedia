<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Report extends Model
{
    use HasFactory;

    public $table = "reports";
    protected $fillable = [
        'id_status_state',
        'id_service',
        'id_progression',
    ];
    public $timestamps = true;

    public function progression()
    {
        return $this->belongsTo(Progression::class, 'id_progression', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service', 'id');
    }
    public function status_state()
    {
        return $this->belongsTo(Status_state::class, 'id_status_state', 'id');
    }
    public function supply()
    {
        return $this->belongsTo(Supply::class, 'id_supply', 'id');
    }
}
