@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Menambahkan Mata Kuliah COAS</h1>
    </div>
    <div class="card-body">
        <form action="/subject/store" method="POST">
            @csrf <!-- CSRF Token -->

            <div class="mb-3">
                <label for="semester" class="form-label">Semester:</label>
                <select name="semester" id="semester" class="form-control" required>
                    <option value="">Pilih Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="subject_name" class="form-label">Nama Mata Kuliah:</label>
                <input type="text" name="subject_name" id="subject_name" class="form-control" placeholder="Isi Dengan Nama Mata Kuliah" required>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Kelas:</label>
                <input type="text" name="class" id="class" class="form-control" placeholder="Isi Dengan Kelas Yang Mengikuti Matkul Tersebut" required>
            </div>

            <button type="submit" class="btn btn-success">Tambahkan</button>
            <a href="/subject" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection
