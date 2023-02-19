<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public  $timestamps= false;
    public $table = 'teacher';
    Protected $fillable = [
        'Name',
        'cnic',
        'email',
    ];

}
