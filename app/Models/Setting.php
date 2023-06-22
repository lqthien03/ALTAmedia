<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $table ="Settings";

    protected $fillable=[
        'role_id',
        'name',
        'name_dangnhap',
        'email',
        'password',
        'sdt',
        'img',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class,'id_status_activate','id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class,'id_role','id');
    }
    public function device()
    {
        return $this->belongsTo(Device::class,'id_device','id');
    }

    public function supply()
    {
        return $this->belongsTo(Supply::class,'id_supply','id');
    }


}
