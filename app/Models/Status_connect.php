<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_connect extends Model
{
    use HasFactory;
    public $table ="status_connects";

    protected $fillable=[
        'name',

    ];
    public $timestamps = true;
}
