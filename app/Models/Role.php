<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $table = "roles";

    protected $fillable = [
        'name_role',
        'mota',



    ];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class, 'id');
    }
}
