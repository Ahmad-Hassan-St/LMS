<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Student extends Model
{
    use HasFactory;
    public  $timestamps= false;
    public $table = 'student';
    Protected $fillable = [
        'Name',
        'Program',
        'email',
        'password',
    ];
}
