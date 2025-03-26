<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    /** @use HasFactory<\Database\Factories\CollegeFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'name'
    ];

    // public function department_section()
    // {
    //     return $this->hasMany(Department::class,'colleges_id');
    // }
}
