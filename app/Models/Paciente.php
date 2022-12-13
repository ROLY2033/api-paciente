<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'age',
        'sex',
        'dni',
        'blood_type',
        'telephone',
        'email',
        'direction'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
