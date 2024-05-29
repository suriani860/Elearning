@extends('admin.main')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
   <div class="card">
        <div class="card-body">
            <a href="#" class="btn btn-primary">+ Courses</a>
            <table class="table mt-2">
                <tr>
                    <th>Nama</th>
                    <th>Category</th>
                    <th>Desc</th>
                </tr>

                @foreach($coursess as $courses)
                    <tr>
                        <td>{{ sloop->interation }}</td>
                        <td>{{ $courses->name }}</td>
                        <td>{{ $courses->category }}</td>
                        <td>{{ $courses-desc }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
   </div>
  </section>
@endsection