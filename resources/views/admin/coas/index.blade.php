<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa COAS</title>
</head>
<body>
    @extends('layouts.app')
    <main>
      @section('content')
            
                <h1 class="mt-4">Mahasiswa COAS</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Daftar Mahasiswa COAS</li>
                </ol>
                <a href="/coas/create" class="btn btn-success mb-3">Tambah Data</a>
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
                                        </tr>
                                    </thead>
                                    @foreach ($coas as $coa)
                                        
                                    <tbody>
                                        <tr>
                                            <td>{{ $coa->id }}</td>
                                            <td>{{ $coa->nrp }}</td>
                                            <td>{{ $coa->name }}</td>
                                            <td>{{ $coa->class }}</td>
                                            <td>{{ $coa->subject }}</td>
                                            <td>{{ $coa->day }}</td>
                                            <td>{{ $coa->timein }}</td>
                                            <td>{{ $coa->timeout }}</td>
                                            <td>{{ $coa->email }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    
                                </table>       
        </main>
      @endsection
</body>
</html>