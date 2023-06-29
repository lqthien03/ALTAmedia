<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    public $table = "diarys";
    protected $fillable = [
        'ip_address',
        'username',
        'action',
        'created_at',
    ];
}
