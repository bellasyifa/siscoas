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
            <section class="multi_step_form">
                <form action="{{ route('submit.store') }}"  id="msform" method="post">
                    @csrf
                    <div class="tittle">
                        <h2>Pengajuan COAS</h2>
                        <p>Pastikan Mengisi Data Dengan Benar</p>
                    </div>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Data Diri</li>
                        <li>Waktu Ketersediaan</li>
                        <li>Transkrip Nilai</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h3>Data Diri</h3>
                        <h6>Lengkapi Data Diri Anda</h6>
                        <div class="form-group fg_2 mb-3">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" placeholder="Masukkan NRP Anda" id="nrp" name="nrp">
                        </div>
                        <div class="form-group fg_2 mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Isi Dengan Nama Lengkap" id="name" name="name">
                        </div>
                        <div class="form-group fg_2 mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Isi Dengan Email Anda" id="email" name="email">
                        </div>
                        <div class="">
                            <label for="class mb-3">Kelas</label>
                            <select class="product_select" id="class" name="class">
                                <option data-display="Pilih Kelas"></option>
                                <option>2IF01</option>
                                <option>2IF02</option>
                                <option>2IF03</option>
                            </select>
                        </div>
                       
                        <div class="">
                            <label for="subject mb-3">Mata Kuliah COAS</label>
                            <select class="product_select" id="subject" name="subject">
                                <option data-display="Pilih Mata Kuliah COAS"></option>
                                <option>Pemrograman Web</option>
                                <option>PBO</option>
                                <option>Visualisasi Data</option>
                            </select>
                        </div>
                        <button type="button" class="action-button previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <h3>Jam Ketersediaan</h3>
                        <h6>Masukkan Jadwal Kuliah Anda Dengan Benar</h6>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <style>
                            .form-group {
                                display: flex;
                                align-items: center;
                                gap: 20px;
                            }

                            .form-container {
                                display: flex;
                                flex-direction: column;
                                gap: 10px;
                            }

                            .add-button {
                                align-self: flex-end;
                            }
                        </style>
                        <div class="form-container" id="form-container">
                            <div class="form-group">
                                <label for="day">Hari</label>
                                <select class="product_select" id="day" name="day">
                                    <option data-display="Pilih Hari"></option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jumat</option>
                                    <option>Sabtu</option>
                                </select>
                    
                                <label for="timein">Jam Masuk</label>
                                <select class="product_select" name="timein" id="timein">
                                    <option data-display="Pilih Jam"></option>
                                    <option value="07:30">07:30</option>
                                    <option value="08:30">08:30</option>
                                    <!-- Tambahkan opsi jam lainnya -->
                                </select>
                    
                                <label for="timeout">Jam Keluar</label>
                                <select class="product_select" name="timeout" id="timeout">
                                    <option data-display="Pilih Jam"></option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:30">09:30</option>
                                    <!-- Tambahkan opsi jam lainnya -->
                                </select>
                            </div>
                    
                            <button id="add-button" class="btn btn-success add-button">+</button>
                        </div>
                    
                        
                        </div>
                        <button type="button" class="action-button previous previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-group fg_3">
                            <h2>Upload Transkrip Nilai</h2>
                            
                                <label for="transkrip">Upload Transkrip Nilai:</label>
                                <input type="file" name="transkrip" accept="image/jpeg" id="transkrip">
                                <br>
                                <button type="button" class="action-button previous previous_button">Back</button>
                                <button type="submit" class="action-button">Finish</button>
                            
                        </div>
                    </fieldset>
                    
                </form>
            </section>
            <!-- END Multiform HTML -->
        </article>
    </main>
    <script>
        const addButton = document.getElementById('add-button');
        const formContainer = document.getElementById('form-container');

        addButton.addEventListener('click', () => {
            event.preventDefault();
            const newFormGroup = document.createElement('div');
            newFormGroup.className = 'form-group';
            newFormGroup.innerHTML = `
                <label for="exampleInputEmail1">Hari</label>
                <select class="product_select" id="day" name="day">
                    <option data-display="Pilih Hari"></option>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                    <option>Sabtu</option>
                </select>
                <label for="dropdown1">Jam Masuk</label>
                <select class="product_select" id="dropdown1">
                    <option data-display="Pilih Jam"></option>
                    <option>07.30</option>
                    <option>08.30</option>
                    <!-- ... Tambahkan opsi jam lainnya ... -->
                </select>
                <label for="dropdown2">Jam Keluar</label>
                <select class="product_select" id="dropdown2">
                    <option data-display="Pilihan 2"></option>
                    <option>Item 2A</option>
                    <option>Item 2B</option>
                    <option>Item 2C</option>
                </select>
            `;

            formContainer.appendChild(newFormGroup);
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
