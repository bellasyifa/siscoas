<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pengajuan COAS </title>
      <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/form.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="assets/css/demo.css">
  
  </head>
  <body>
 
  
 <main>
  <article>

      <!-- Start Multiform HTML -->
  <section class="multi_step_form">  
  <form id="msform"> 
    <!-- Tittle -->
    <div class="tittle">
      <h2>Pengajuan COAS</h2>
      <p>Pastikan Mengisi Data Dengan Benar</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Data Diri</li>  
      <li>Jam Ketersediaan</li> 
      <li>Mata Kuliah COAS</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h3>Data Diri</h3>
      <h6>Lengkapi Data Diri Anda</h6> 
      <div class="form-group fg_2"> 
        <label for="exampleInputEmail1">NRP</label>
        <input type="text" class="form-control" placeholder="Masukkan NRP Anda">
      </div> 
      <div class="form-group fg_2"> 
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Isi Dengan Nama Lengkap">
      </div> 
      <div class=""> 
        <label for="exampleInputEmail1">Kelas</label>
        <select class="product_select">
          <option data-display="Pilih Kelas"></option> 
          <option>2IF01</option>
          <option>2IF02</option>
          <option>2IF03</option> 
        </select>
      </div>
      <div class="form-group">
        <label>Mata Kuliah COAS</label>
        <div class="checkbox-group">
            <label>
                <input type="checkbox" name="coasSubjects" value="Matematika Diskrit"> Pemrograman Web
            </label>
            <label>
                <input type="checkbox" name="coasSubjects" value="Algoritma dan Struktur Data"> Visualisasi Data
            </label>
            <label>
                <input type="checkbox" name="coasSubjects" value="Pemrograman Web"> Aplikasi Bisnis
            </label>
            <label>
                <input type="checkbox" name="coasSubjects" value="Jaringan Komputer"> Jaringan Komputer
            </label>
            <!-- Tambahkan lebih banyak mata kuliah COAS ... -->
        </div>
    </div>
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>
    <fieldset>
      <h3>Jam Ketersediaan</h3>
      <h6>Masukkan Jadwal Kuliah Anda Dengan Benar</h6>

      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-group {
            display: flex;
            align-items: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <div id="form-container">
        <div class="form-group">
            <label for="exampleInputEmail1">Hari</label>
            <select class="product_select">
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
        </div>
    </div>

   
    <button id="add-button" class="btn btn-success">+</button>

    <script>
        const addButton = document.getElementById('add-button');
        const formContainer = document.getElementById('form-container');

        addButton.addEventListener('click', () => {
            event.preventDefault();
            const newFormGroup = document.createElement('div');
            newFormGroup.className = 'form-group';
            newFormGroup.innerHTML = `
                <label for="exampleInputEmail1">Hari</label>
                <select class="product_select">
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
</body>
</html>

    
    
    
    
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>  
    <fieldset>
      <h3>Create Security Questions</h3>
      <h6>Please update your account with security questions</h6> 
      <div class="form-group"> 
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option> 
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option> 
        </select>
      </div> 
      <div class="form-group fg_2"> 
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div> 
      <div class="form-group"> 
        <select class="product_select">
          <option data-display="1. Choose A Question">1. Choose A Question</option> 
          <option>2. Choose A Question</option>
          <option>3. Choose A Question</option> 
        </select>
      </div> 
      <div class="form-group fg_3"> 
        <input type="text" class="form-control" placeholder="Anwser here:">
      </div> 
      <button type="button" class="action-button previous previous_button">Back</button> 
      <a href="#" class="action-button">Finish</a> 
    </fieldset>  
  </form>  
</section> 
      <!-- END Multiform HTML -->
  </article>
 </main>
 
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