<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'doctor_id',
        'ubs_id',
        'data',
        'status',
    ];

    /*
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsToMany(Doctor::class, 'doctor_id');
    }

    public function ubs(){
        return $this->belongsToMany(Ubs::class, 'ubs', 'id');
    }
        */
}
