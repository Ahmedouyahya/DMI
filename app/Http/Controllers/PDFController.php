<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $students = Student::all();
        $data = [
            'title' => 'Master1 SSD',
            'year' => '2023-2024',
            'students' => $students,
        ];

        $pdf = Pdf::loadView('pdf_template', $data);

        // Set custom paper size (e.g., 14 inches wide and 8.5 inches tall)
        $pdf->setPaper([0, 0, 1008, 612]); // Width: 1008pt (14 inches), Height: 612pt (8.5 inches)

        return $pdf->download('Master1_SSD.pdf');
    }
}
