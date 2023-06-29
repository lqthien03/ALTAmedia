<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table = "users";
    protected $fillable = [
        'name',
        'name_dangnhap',
        'email',
        'password',
        'sdt',
        'role_id',
        'id_option_device',

    ];
    protected $attributes = ['id_status_activate' => 1];


    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function status_activate()
    {
        return $this->belongsTo(Status_activate::class, 'id_status_activate', 'id');
    }
    public function progression()
    {
        return $this->hasMany(Progression::class);
    }
}
