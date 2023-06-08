<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Status_activate extends Model
{
    use HasFactory;
    public $table ="status_activates";

    protected $fillable=[
        'name',

    ];
    public $timestamps = true;
}
