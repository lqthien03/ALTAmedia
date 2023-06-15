<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $table ="Settings";

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class,'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class,'id');
    }
    public function device()
    {
        return $this->belongsTo(Device::class,'id');
    }

    public function supply()
    {
        return $this->belongsTo(Supply::class,'id');
    }


}
