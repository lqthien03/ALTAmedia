<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option_device extends Model
{
    use HasFactory;

    public $table ="option_devices";

    protected $fillable=[
        'name',

    ];
    public $timestamps = false;
}
