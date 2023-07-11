<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends ModelAuthenticate
{
    protected $table = 'materi';
    use HasFactory;
}
