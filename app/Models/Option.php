<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    public $table ="options";

    protected $fillable=[
        'name_option',

    ];
    public $timestamps = true;
}
