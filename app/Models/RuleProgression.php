<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuleProgression extends Model
{
    use HasFactory;
    protected $table = 'rule_progressions';
    protected $fillable = [
        'is_auto_increase',
        'start_count',
        'end_count',
        'prefix',
        'surfix',
        'is_prefix',
        'is_surfix',
        'is_reset',
    ];

    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service', 'id');
    }
}
