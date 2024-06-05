@extends('admin.main')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Student</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <a href="/admin/student/create" class="btn btn-primary my-3">+ Student</a>
            <table class="table mt-2">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Major</th>
                    <th>Courses</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>

                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->courses->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td class="d-flex">
                        <a href="/admin/student/edit/{{ $student->id }}" class="btn btn-warning me-2">Edit</a>
                        <form action="/admin/student/delete/{{ $student->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="Submit" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection