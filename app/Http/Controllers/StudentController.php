<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //menampilkan data student dari database
    public function index()
    {
        // mendapatkan data dari table student
        $students = Student::all();

        //  kirim data ke view untuk ditampilkan
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }
    
}
