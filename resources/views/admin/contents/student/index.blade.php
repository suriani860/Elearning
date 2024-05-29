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
            <a href="#" class="btn btn-primary">+ Student</a>
            <table class="table mt-2">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Major</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>

                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->major }}</td>
                        <td>{{ $student->class }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
   </div>
  </section>
@endsection