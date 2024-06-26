<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSSD extends Model
{
    use HasFactory;

    protected $table = 'student_ssd';

    protected $fillable = [
        'student_id',
        'decision',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
