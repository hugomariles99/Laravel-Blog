<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $table = "users";
}

/*
TERMINAL
php artisan tinker
use App\Models\Curso;
$curso = new Curso;
$curso -> name = 'Laravel';
$curso -> descripcion = "El mejor framework de PHP";
$curso -> save();
*/