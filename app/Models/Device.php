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
        'name_dangnhap',
        'password',
        'id_user',
        'id_service',
        'id_option_device',
        'id_status_activate',
        'id_status_connect',
        'id_option_device',

    ];
    protected $attributes = ['id_status_activate' => 1, 'id_status_connect' => 1,

            ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function status_connect()
    {
        return $this->belongsTo(Status_connect::class,'id_status_connect','id');
    }
    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class,'id_status_activate','id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'id_service','id');
    }
    public function option_device(){
        return $this->belongsTo(Option_device::class,'id_option_device','id');
    }





}
