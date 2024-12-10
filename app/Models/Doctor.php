<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'specialism',
        'crm',
        'ubs_id'
    ];

    public function ubs(){
        return $this->belongsTo(Ubs::class, 'schedules');
    }

    public function schedules(){
        return $this->belongsToMany(Schedule::class, 'schedules');
    }
}
