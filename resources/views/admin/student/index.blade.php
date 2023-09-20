<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal</title>
</head>
<body>
    @extends('layouts.app')
    <main>
      @section('content')

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            
                <h1 class="mt-4">Mahasiswa</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Mahasiswa Calon COAS</li>
                </ol>
                <a href="/student/create" class="btn btn-success mb-3">Tambah Data</a>
                
                <div class="container">
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Mata Kuliah</th>
                                            <th>Hari</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Keluar</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                       
                                        </tr>
                                    </thead>
                                    @foreach ($students as $student)
                                        
                                    <tbody>
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->nrp }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->class }}</td>
                                            <td>{{ $student->subject }}</td>
                                            <td>{{ $student->day }}</td>
                                            <td>{{ $student->timein }}</td>
                                            <td>{{ $student->timeout }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td><button class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>   
                            </div>    
        </main>
      @endsection
</body>
</html>