<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $table ="Services";
    // public $id;
    // public $ma_service;
    // public $name_service;
    // public $mota;
    // public $numerical_order;
    // public $status;

    // protected $primaryKey = 'devices_id';


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
        'ma_service',
        'name_service',
        'mota',
        'status_activates',
        'status_completes',
        'progressions',
    ];
    public $timestamps = true;

    public function status()
    {
        # code...
        return $this->belongsTo(Status_activate::class,'id');
        return $this->belongsTo(Status_complete::class,'id');
        return $this->belongsTo(Progression::class,'id');
    }

}
