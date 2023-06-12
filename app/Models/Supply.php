<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;
    public $table ="supplys";
    protected $fillable=[
        'name_supply',
    ];
    public $timestamps = true;

}
