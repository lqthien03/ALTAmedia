<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Status_state extends Model
{
    use HasFactory;
    public $table ="status_states";

    protected $fillable=[
        'name_state',

    ];
    public $timestamps = true;
}
