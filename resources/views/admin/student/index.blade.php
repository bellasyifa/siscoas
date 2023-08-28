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
            
                <h1 class="mt-4">Mahasiswa</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Mahasiswa Calon COAS</li>
                </ol>
              
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Mata Kuliah</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    @foreach ($students as $student)
                                        
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>       
        </main>
      @endsection
</body>
</html>