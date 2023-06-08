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
    // public $id;
    // public $ma_device;
    // public $name_device;
    // public $address_ip;
    // public $status_hd;
    // public $status_connect;
    // public $device_use;
    // protected $primaryKey = 'id';
    // public $incrementing = true;


    // public function __contruct($id,$ma_device,$name_device,$address_ip,$status_hd,$status_connect,$device_use){
    //     $this->id=$id;
    //     $this->ma_device=$ma_device;
    //     $this->name_device=$name_device;
    //     $this->address_ip=$address_ip;
    //     $this->status_hd=$status_hd;
    //     $this->status_connect=$status_conne;
    //     $this->device_use=$device_use;

    // }
    protected $fillable=[
        'ma_device',
        'name_device',
        'address_ip',
        'status_activete',
        'status_connect',
        'device_use',
    ];
    public $timestamps = true;

    public function status()
    {
        # code...
        // return $this->belongsTo(Status_activate::class,'id');
        return $this->belongsTo(Status_connect::class,'id');
        return  $this->belongsTo(User::class,'id');
    }






}
