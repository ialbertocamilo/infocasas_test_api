<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'completed'
    ];

    public function scopeByName($query,$value){
        return $query->where('name','like',"%$value%");
    }

    public function scopeByCompleted($query,$value){
        return $query->orWhere('completed',$value);
    }
}
