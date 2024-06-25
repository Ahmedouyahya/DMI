<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('name');
            $table->integer('number');
            $table->year('year_of_bac');
            $table->year('year_of_diploma');
            $table->decimal('score_s1', 5, 2);
            $table->decimal('score_s2', 5, 2);
            $table->decimal('score_s3', 5, 2);
            $table->decimal('score_s4', 5, 2);
            $table->decimal('score_s5', 5, 2);
            $table->decimal('score_s6', 5, 2);
            $table->decimal('avg_moy6', 5, 2);
            $table->decimal('bonus_ann_form', 5, 2);
            $table->decimal('bonus_1st_session', 5, 2);
            $table->decimal('malus', 5, 2);
            $table->decimal('general_avg', 5, 2);
            $table->string('speciality');
            $table->string('diploma_institution');
            $table->string('choice1');
            $table->string('choice2');
            $table->string('choice3');
            $table->string('choice4');
            $table->string('decision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
