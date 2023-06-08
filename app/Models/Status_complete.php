<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_complete extends Model
{
    use HasFactory;
    public $table ="status_complete";

    protected $fillable=[
        'name',

    ];
    public $timestamps = true;
}
