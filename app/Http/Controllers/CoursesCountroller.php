<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesCountroller extends Controller
{
    //menampilkan data student dari database
    public function index()
    {
        // mendapatkan data dari table courses
            $coursess = Courses::all();

        //  kirim data ke view untuk ditampilkan
        return view('admin.contents.courses.index', [
            'coursess' => $coursess
        ]);
    }
    
    // method untuk menampilkan from tambah courses
    public function create(){
        // panggil view
        return view('admin.contents.courses.create');
    } 
    
    // method untuk  menyimpan data courses baru
    public function store(request $request){
        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
            ]);
    
            // simpan data ke db 
            Courses::create([
                'name' => $request->name,
                'category' => $request->category,
                'desc' => $request->desc,
            ]);
    
            // redirect ke halaman student
            return redirect('/admin/courses')->with('massage', 'Data courses berhasil ditambahkan!');
    }

    // method untuk menampilkan halaman edit courses
    public function edit($id){
        // mencari data student berdasarkan id
        $courses = Courses::find($id);
        
        // panggil view dan kirimdata courses
        return view('admin.contents.courses.edit', compact('courses'));
    }

    // Method untuk menyimpan hasil update
    public function update($id, Request $request){
        // cari data courses berdasarkan id
        $courses = Courses::find($id);

        // validasi request
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

        // Simpan perubahan 
        $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        // kembalikan kehalaman courses
        return redirect('/admin/courses')->with('massage', 'Berhasil Mengupdate Courses');
    }

   // Metod untuk menghapus courses
   public function destroy($id){
    // cari data courses berdasarkan id
    $courses = Courses::find($id);

   //  hapus student
   $courses->delete();

    // redirect ke halaman courses
    return redirect('/admin/courses')->with('massage', 'berhasil menghapus Courses!');
}
}
