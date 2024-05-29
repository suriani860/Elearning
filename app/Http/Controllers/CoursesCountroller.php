<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesCountroller extends Controller
{
    //menampilkan data student dari database
    public function index()
    {
        // mendapatkan data dari table student
            $coursess = Courses::all();

        //  kirim data ke view untuk ditampilkan
        return view('admin.contents.courses.index', [
            'coursess' => $coursess
        ]);
    }
}
