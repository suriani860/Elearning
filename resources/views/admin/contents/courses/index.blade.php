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
                    <a href="/admin/courses/create" class="btn btn-primary mt-3">+ Courses</a>
                    <table class="table mt-2">
                        <tr>
                            <th>Nama</th>
                            <th>Category</th>
                            <th>Desc</th>
                            <th>Action</th>
                        </tr>

                        @foreach($coursess as $courses)
                            <tr>
                                <td>{{ $courses->name }}</td>
                                <td>{{ $courses->category }}</td>
                                <td>{{ $courses->desc }}</td>
                                <td class="d-flex">
                                    <a href="/admin/courses/edit/{{ $courses->id }}" class="btn btn-warning me-2">Edit</a>
                                    <form action="/admin/courses/delete/{{ $courses->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <botton class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </section>
@endsection