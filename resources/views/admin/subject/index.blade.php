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
            
                <h1 class="mt-4">Subjects</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Subjects</li>
                </ol>
              
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Semester</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    {{-- ini untuk menampilkan data yang ada di table subjects --}}
                                    @foreach ($subjects as $subject) 
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{ $subject->semester }} </td>
                                            <td> {{ $subject->subject_name }} </td>
                                            <td> {{ $subject->class }} </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>       
        </main>
      @endsection
</body>
</html>