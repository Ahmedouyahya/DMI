<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentIMCS;
use App\Models\StudentSI;
use App\Models\StudentRSC;
use App\Models\StudentSSD;

class AlgorithmController extends Controller
{
    // Exécuter l'algorithme pour remplir les tables
    public function runAlgorithm()
    {
        $students = Student::all();

        foreach ($students as $student) {
            $decision = $this->calculateDecision($student);

            StudentIMCS::updateOrCreate(
                ['student_id' => $student->id],
                ['decision' => $decision['imcs']]
            );

            StudentSI::updateOrCreate(
                ['student_id' => $student->id],
                ['decision' => $decision['si']]
            );

            StudentRSC::updateOrCreate(
                ['student_id' => $student->id],
                ['decision' => $decision['rsc']]
            );

            StudentSSD::updateOrCreate(
                ['student_id' => $student->id],
                ['decision' => $decision['ssd']]
            );
        }

        return redirect()->route('students.index')->with('success', 'Algorithm executed successfully.');
    }

    // Calculer la décision pour chaque table (IMCS, SI, RSC, SSD)
    private function calculateDecision($student)
    {
        // Ici vous pouvez ajouter la logique de votre algorithme pour calculer les décisions
        $decisions = [
            'imcs' => 'Decision for IMCS',
            'si' => 'Decision for SI',
            'rsc' => 'Decision for RSC',
            'ssd' => 'Decision for SSD',
        ];

        return $decisions;
    }
}
