<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

class Device extends Model
{
    use HasFactory;
    public $table ="devices";

    protected $fillable=[
        'ma_device',
        'name_device',
        'address_ip',
        'device_sd',
        'status_activete',
        'status_connect',
        'device_sd',
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }

    public function status_connect()
    {
        return $this->belongsTo(Status_connect::class,'id');
    }
    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class,'id');
    }
    public function option(){
        return $this->belongsTo(Option::class,'id');
    }





}
