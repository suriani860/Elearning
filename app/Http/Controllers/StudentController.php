<?php

namespace App\Http\Controllers;

use App\Models\Courses;
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
    
    // method untuk menampilkan from tambah student
    public function create()
    {
        // mendapatkan data courses
        $courses = Courses::all();

        // panggil view
        return view('admin.contents.student.create', [
            'courses' => $courses,
        ]);
    } 

    // method untuk  menyimpan data student baru
    public function store(request $request)
    {
        // validasi data yang diterima
        $request->validate([
        'name' => 'required',
        'nim' => 'required | numeric',
        'courses_id' => 'nullable',
        'major' => 'required',
        'class' => 'required',
        ]);

        // simpan data ke db
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'courses_id' => $request->courses_id,
            'class' => $request->class,
        ]);

        // redirect ke halaman student
        return redirect('/admin/student')->with('massage', 'Data student berhasil ditambahkan!');
    }

    // method untuk manampilkan halaman edit
    public function edit($id)
    {
        // cari data student berdasarkan id
        $student = Student::find($id);
        $courses = Courses::all();

        return view('admin.contents.student.edit', [
            'student' => $student,
            'courses' => $courses
        ]);
    }

    // untuk menyimpan hasil update
    public function update($id, Request $request)
    {
        // cari data student berdasarkan id
        $student = Student::find($id);

         // validasi data yang diterima
         $request->validate([
            'name' => 'required',
            'nim' => 'required | numeric',
            'courses_id' => 'nullable',
            'major' => 'required',
            'class' => 'required',
            ]);

            // simpan perubahan
            $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'courses_id' => $request->courses_id,
            'class' => $request->class,
            ]);

            // redirect ke halaman student
        return redirect('/admin/student')->with('massage', 'berhasil mengedit Student!');
    }

    // Metod untuk menghapus student
    public function destroy($id){
         // cari data student berdasarkan id
         $student = Student::find($id);

        //  hapus student
        $student->delete();

         // redirect ke halaman student
         return redirect('/admin/student')->with('massage', 'berhasil menghapus Student!');
    }
}
