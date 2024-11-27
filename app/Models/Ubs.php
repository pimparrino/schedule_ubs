<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone'
    ];
    
    public function doctors(){
        return $this->hasMany(Doctor::class, 'id');
    }
}
