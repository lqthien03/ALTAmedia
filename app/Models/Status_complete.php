<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Status_complete extends Model
{
    use HasFactory;
    public $table ="status_completes";

    protected $fillable=[
        'name_complete',

    ];
    public $timestamps = false;
}
