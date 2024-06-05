<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    // mendefinisikan kolom yang boleh diisi
    protected $fillable = ['name', 'nim', 'major','courses_id', 'class'];


    /**
     * Laravel relationship method:
     * 1. One to One
     *  - hasOne()      = tabel saat ini meminjamkan id ke tabel lain
     *  - belongsTo()   = tabel saat ini MEMINJAM id/key dari tabel lain
     * 
     * 2. One to Many / Many to One
     *  - hasMany()       = tabel saat ini meminjamkan id ke tabel lain
     *  - belongsToMany() = tabel saat ini MAMINJAM id/key dari tabel lain
     */


    // mendefinisikan relasi ke model courses
    public function courses(){
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
