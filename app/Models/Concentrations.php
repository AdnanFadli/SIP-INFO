<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concentrations extends Model
{
    use HasFactory;
    protected $table='concentrations';
    protected $fillable = [
        'id',
        'name',
    ];
    public function course(){
        return $this->hasMany(Courses::class);
    }
}
