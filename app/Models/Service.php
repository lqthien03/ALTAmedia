<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Service extends Model
{
    use HasFactory;
    public $table = "services";

    protected $fillable = [
        'ma_service',
        'name_service',
        'mota',
        'id_status_activate',
        'id_status_complete',
        'id_progression',

    ];
    protected $attributes = ['id_status_activate' => 1, 'id_status_complete' => 1, 'id_progression' => 102];

    public $timestamps = false;

    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class, 'id_status_activate', 'id');
    }
    public function status_complete()
    {
        return $this->belongsTo(Status_complete::class, 'id_status_complete', 'id');
    }
    public function progression()
    {
        return $this->hasMany(Progression::class, 'id');
    }
}
