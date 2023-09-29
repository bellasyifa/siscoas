<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pengajuan COAS</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <!-- Telephone Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/form.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <main>
        
        <article>
            <!-- Start Multiform HTML -->
            <div class="card">
                <div class="card-header">
                    Add a New Student
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
            
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

    
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <select class="form-select w-100" id="class" name="class" required>
                                <option value="2IF">2IF</option>
                                <option value="3IF">3IF</option>
                                <option value="4IF">4IF</option>
                            </select>
                        </div>
            
                        
        <label for="subject_coas" class="form-label mr-2">Pilih Matkul COAS</label>
        <select class="form-select w-100" id="class" name="class" required>
            <option value="PBO">PBO</option>
            <option value="P Web 1">P Web 1</option>
            <option value="P Web 2">P Web 2</option>
            <option value="Basis Data">Basis Data</option>
        </select>
                       <!-- Dynamic form fields (Day, Subject, Time In, Time Out) -->
<div class="form-inline mb-3" id="dynamic-form-fields">
    <!-- Initial form field -->
    <div class="form-group">
        <label for="day" class="form-label mr-2">Day</label>
        <select class="form-select mr-2" id="day" name="day" required>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
        </select>

     
            <label for="subject" class="form-label mr-2">Matkul</label>
            <input type="text" class="form-control mr-2" id="subject" name="subject" required>
     

        <label for="timein" class="form-label mr-2">Time In</label>
        <input type="time" class="form-control mr-2" id="timein" name="timein" required>

        <label for="timeout" class="form-label mr-2">Time Out</label>
        <input type="time" class="form-control mr-2" id="timeout" name="timeout" required>
    </div>
</div>

<!-- "Tambah" button to add more form fields -->
<button type="button" class="btn btn-primary" id="add-form-field">Tambah</button>


            
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
            
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </article>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener untuk tombol "Tambah"
            document.getElementById('add-form-field').addEventListener('click', function() {
                // Dapatkan elemen kontainer untuk form dinamis
                var dynamicFormFields = document.getElementById('dynamic-form-fields');
    
                // Salin elemen pertama dari form dinamis untuk menggandakannya
                var clonedForm = dynamicFormFields.firstElementChild.cloneNode(true);
    
                // Reset nilai input pada form yang baru
                clonedForm.querySelectorAll('select, input').forEach(function(input) {
                    input.value = '';
                });
    
                // Tambahkan form yang baru ke dalam kontainer form dinamis
                dynamicFormFields.appendChild(clonedForm);
            });
        });
    </script>
    <footer class="credit">Sistem Informasi COAS <a title="Awesome web design code & scripts" href="https://lpkia.ac.id" target="_blank">IDE LPKIA</a></footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="assets/js/form.js"></script>
</body>
</html>
