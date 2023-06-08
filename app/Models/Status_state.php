<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_state extends Model
{
    use HasFactory;
    public $table ="status_state";

    protected $fillable=[
        'name',

    ];
    public $timestamps = true;
}
