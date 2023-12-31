@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Menambahkan Mahasiswa COAS</h1>
    </div>
    <div class="card-body">
        <form action="/coas/store" method="POST">
            @csrf <!-- CSRF Token -->

            <div class="mb-3">
                <label for="nrp" class="form-label">NRP:</label>
                <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Isi Dengan NRP Mahasiswa" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Isi Nama Mahasiswa" required>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Kelas</label>
                <input type="text" name="class" id="class" class="form-control" placeholder="Isi Dengan Kelas Yang Mengikuti Matkul Tersebut" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Mata Kuliah</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Isi Dengan Nama Mata Kuliah" required>
            </div>

            <div class="mb-3">
                <label for="day" class="form-label">Hari</label>
                <input type="text" name="day" id="day" class="form-control" placeholder="Isi Dengan Hari Matkul Tersebut Berlangsung" required>
            </div>

            <div class="mb-3">
                <label for="timein" class="form-label">Jam Masuk</label>
                <input type="time" name="timein" id="timein" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="timeout" class="form-label">Jam Keluar</label>
                <input type="time" name="timeout" id="timeout" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Isi Dengan Email Mahasiswa" required>
            </div>

            <button type="submit" class="btn btn-success">Tambahkan</button>
            <a href="/coas" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection
