<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';


    // protected $attributes = [
    //  'loop' => "false",
    // ];
 
    protected  $fillable = [
     'name',
     'email',
     'year',
     'password',
    ];
}
