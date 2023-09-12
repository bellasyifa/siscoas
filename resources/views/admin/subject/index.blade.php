<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mata Kuliah COAS</title>
</head>
<body>
    @extends('layouts.app')
    <main>
        @section('content')
            <h1 class="mt-4">Mata Kuliah</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Mata Kuliah</li>
            </ol>
            <a href="/subject/create" class="btn btn-success mb-3">Tambah Data</a>
            <table id="datatablesSimple" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject) 
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->semester }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->class }}</td>
                            <td><button class="btn btn-danger">Hapus</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>       
        </main>
    @endsection
</body>
</html>
