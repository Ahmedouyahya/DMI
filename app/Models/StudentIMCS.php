<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentIMCS extends Model
{
    use HasFactory;

    //protected $table = 'student_imcs';

    protected $fillable = [
        'student_id',
        'decision',
    ];

    // Relation one-to-one avec Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

