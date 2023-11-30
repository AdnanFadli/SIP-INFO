<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    use HasFactory;
    protected $table="lecturers";
    protected $fillable=[
        'code',
        'name',
        'gender',
        'phone_number',
        'email',
        'status',
        'password',
        'role',
    ];
}
