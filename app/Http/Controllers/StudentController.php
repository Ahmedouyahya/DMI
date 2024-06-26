<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Afficher la liste des étudiants
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Afficher le formulaire de création d'un étudiant
    public function create()
    {
        return view('students.create');
    }

    // Stocker un nouvel étudiant
    public function store(Request $request)
{
    $validated = $request->validate([
        'profile' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'year_of_bac' => 'required|date',
        'year_of_diploma' => 'required|date',
        'score_s1' => 'required|numeric',
        'score_s2' => 'required|numeric',
        'score_s3' => 'required|numeric',
        'score_s4' => 'required|numeric',
        'score_s5' => 'required|numeric',
        'score_s6' => 'required|numeric',
        'bonus_1st_session' => 'required|numeric',
        'malus' => 'required|numeric',
        'speciality' => 'required|string|max:255',
        'diploma_institution' => 'required|string|max:255',
        'choice1' => 'required|string|max:255',
        'choice2' => 'required|string|max:255',
        'choice3' => 'required|string|max:255',
        'choice4' => 'required|string|max:255',
    ]);

    $avg_moy6 = ($request->score_s1 + $request->score_s2 + $request->score_s3 + $request->score_s4 + $request->score_s5 + $request->score_s6) / 6;
    $bonus_ann_form = (date('Y', strtotime($request->year_of_diploma)) - date('Y', strtotime($request->year_of_bac)) === 3) ? 1 : 0;
    $general_avg = $avg_moy6 + $bonus_ann_form + $request->bonus_1st_session - $request->malus;

    Student::create([
        'profile' => $validated['profile'],
        'name' => $validated['name'],
        'number' => $validated['number'],
        'year_of_bac' => $validated['year_of_bac'],
        'year_of_diploma' => $validated['year_of_diploma'],
        'score_s1' => $validated['score_s1'],
        'score_s2' => $validated['score_s2'],
        'score_s3' => $validated['score_s3'],
        'score_s4' => $validated['score_s4'],
        'score_s5' => $validated['score_s5'],
        'score_s6' => $validated['score_s6'],
        'avg_moy6' => $avg_moy6,
        'bonus_ann_form' => $bonus_ann_form,
        'bonus_1st_session' => $validated['bonus_1st_session'],
        'malus' => $validated['malus'],
        'general_avg' => $general_avg,
        'speciality' => $validated['speciality'],
        'diploma_institution' => $validated['diploma_institution'],
        'choice1' => $validated['choice1'],
        'choice2' => $validated['choice2'],
        'choice3' => $validated['choice3'],
        'choice4' => $validated['choice4'],
    ]);

    return redirect()->route('students.index');
}

public function update(Request $request, Student $student)
{
    $validated = $request->validate([
        'profile' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'year_of_bac' => 'required|date',
        'year_of_diploma' => 'required|date',
        'score_s1' => 'required|numeric',
        'score_s2' => 'required|numeric',
        'score_s3' => 'required|numeric',
        'score_s4' => 'required|numeric',
        'score_s5' => 'required|numeric',
        'score_s6' => 'required|numeric',
        'bonus_1st_session' => 'required|numeric',
        'malus' => 'required|numeric',
        'speciality' => 'required|string|max:255',
        'diploma_institution' => 'required|string|max:255',
        'choice1' => 'required|string|max:255',
        'choice2' => 'required|string|max:255',
        'choice3' => 'required|string|max:255',
        'choice4' => 'required|string|max:255',
    ]);

    $avg_moy6 = ($request->score_s1 + $request->score_s2 + $request->score_s3 + $request->score_s4 + $request->score_s5 + $request->score_s6) / 6;
    $bonus_ann_form = (date('Y', strtotime($request->year_of_diploma)) - date('Y', strtotime($request->year_of_bac)) === 3) ? 1 : 0;
    $general_avg = $avg_moy6 + $bonus_ann_form + $request->bonus_1st_session - $request->malus;

    $student->update([
        'profile' => $validated['profile'],
        'name' => $validated['name'],
        'number' => $validated['number'],
        'year_of_bac' => $validated['year_of_bac'],
        'year_of_diploma' => $validated['year_of_diploma'],
        'score_s1' => $validated['score_s1'],
        'score_s2' => $validated['score_s2'],
        'score_s3' => $validated['score_s3'],
        'score_s4' => $validated['score_s4'],
        'score_s5' => $validated['score_s5'],
        'score_s6' => $validated['score_s6'],
        'avg_moy6' => $avg_moy6,
        'bonus_ann_form' => $bonus_ann_form,
        'bonus_1st_session' => $validated['bonus_1st_session'],
        'malus' => $validated['malus'],
        'general_avg' => $general_avg,
        'speciality' => $validated['speciality'],
        'diploma_institution' => $validated['diploma_institution'],
        'choice1' => $validated['choice1'],
        'choice2' => $validated['choice2'],
        'choice3' => $validated['choice3'],
        'choice4' => $validated['choice4'],
    ]);

    return redirect()->route('students.index');
}



public function show(Student $student)
{
    return view('students.show', compact('student'));
}

// Afficher le formulaire d'édition d'un étudiant
public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

// Supprimer un étudiant
public function destroy(Student $student)
{
    $student->delete();

    return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
}
}


