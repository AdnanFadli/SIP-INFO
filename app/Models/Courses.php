<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table="courses";
    protected $fillable=[
        'code',
        'concentration_id',
        'name',
        'sks',
        'semester',
        'lecturer_id',
    ];
    public function concentrations(){
        return $this->belongsTo(Concentrations::class,'concentration_id');
    }
    public function lecturers(){
        return $this->belongsTo(Lecturers::class,'lecturer_id');
    }
}
