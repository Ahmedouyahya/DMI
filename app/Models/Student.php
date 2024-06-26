<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile',
        'name',
        'number',
        'year_of_bac',
        'year_of_diploma',
        'score_s1',
        'score_s2',
        'score_s3',
        'score_s4',
        'score_s5',
        'score_s6',
        'avg_moy6',
        'bonus_ann_form',
        'bonus_1st_session',
        'malus',
        'general_avg',
        'speciality',
        'diploma_institution',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
    ];

    // Relation one-to-one avec StudentRSC
    public function studentRSC()
    {
        return $this->hasOne(StudentRSC::class);
    }

    // Relation one-to-one avec StudentIMCS
    public function studentIMCS()
    {
        return $this->hasOne(StudentIMCS::class);
    }

    // Relation one-to-one avec StudentSI
    public function studentSI()
    {
        return $this->hasOne(StudentSI::class);
    }

    // Relation one-to-one avec StudentSSD
    public function studentSSD()
    {
        return $this->hasOne(StudentSSD::class);
    }
}
